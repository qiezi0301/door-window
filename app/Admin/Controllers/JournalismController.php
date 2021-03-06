<?php

namespace App\Admin\Controllers;

use App\Journalism;
use App\NewType;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class JournalismController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '新闻管理';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Journalism);

        $grid->column('id', __('Id'));
        $grid->column('tid', __('Tid'));
        $grid->newType()->name();
        $grid->column('title', __('标题'))->editable();
//        $grid->column('describe', __('Describe'));
        $grid->column('thumb', __('缩略图'))->image('',80,60);
//        $grid->column('content', __('Content'));
        $grid->column('views_count', __('点击量'));
        $grid->column('created_at', __('创建时间'));
        $grid->column('updated_at', __('更新时间'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Journalism::findOrFail($id));

        $show->field('id', __('Id'));

        $show->field('tid', __('类型'))->as(function ($id) {
            $type = NewType::find($id);
            if ($type) {
                return $type->name;
            }
        });
        $show->field('title', __('标题'));
        $show->field('describe', __('简介'));
        $show->field('thumb', __('Thumb'))->image('',160,120);
        $show->field('content', __('新闻内容'))->json();
        $show->field('views_count', __('点击量'));
        $show->field('created_at', __('创建时间'));
        $show->field('updated_at', __('更新时间'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Journalism);
        $form->select('tid','新闻类型')->options(NewType::pluck('name', 'id'))->help('请选择新闻类型');
        $form->text('title', __('Title'));
        $form->text('describe', __('Describe'));
        $form->image('thumb', __('Thumb'))->move('/news/'.date('Y-m-d', time()))->removable();
        $form->UEditor('content', __('新闻内容'));

        return $form;
    }
}
