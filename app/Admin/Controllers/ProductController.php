<?php

namespace App\Admin\Controllers;

use App\Product;
use App\Type;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProductController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '产品';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Product);

        $grid->column('id', __('Id'));
//        $grid->column('tid', __('所属分类'));
        $grid->type()->name();
        $grid->column('name', __('产品名称'))->editable();
        $grid->column('thumb', __('缩略图'))->image('',50,50);
//        $grid->column('content', __('Content'));
//        $grid->column('images', __('Images'))->image('',50,50);
        $grid->column('views_count', __('点击数'));
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
        $show = new Show(Product::findOrFail($id));

//        $show->field('id', __('Id'));
        $show->field('tid', __('分类'))->as(function ($id) {
            $type = Type::find($id);
            if ($type) {
                return $type->name;
            }
        });

        $show->field('name', __('产品名称'));
        $show->field('thumb', __('缩略图'))->image('',100,100);
        $show->field('content', __('产品内容'))->json();
        $show->field('pictures', __('产品图片'))->image('',100,100);
//        $show->field('views_count', __('Views count'));
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
        $form = new Form(new Product);

        $form->select('tid','分类')->options(Type::pluck('name', 'id'))->help('请选择产品所属分类');
        $form->text('name', __('产品名称'))->help('请输入产品名称');
        $form->image('thumb', __('Thumb'))->uniqueName()->removable()->move('/products/'.date('Y-m-d', time()));
        $form->UEditor('content', __('产品内容'));
        //表字段名一定不要命名为images,否则会报错，此处的坑被我碰到了
        $form->multipleImage('pictures','多图')->help('请上传图片格式')->removable();
        return $form;
    }
}
