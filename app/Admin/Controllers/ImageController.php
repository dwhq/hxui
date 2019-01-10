<?php

namespace App\Admin\Controllers;

use App\Model\image;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class ImageController extends Controller
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header('Index')
            ->description('description')
            ->body($this->grid());
    }

    /**
     * Show interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->header('Detail')
            ->description('description')
            ->body($this->detail($id));
    }

    /**
     * Edit interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header('Edit')
            ->description('description')
            ->body($this->form()->edit($id));
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header('Create')
            ->description('description')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new image);

        $grid->actions(function ($actions) {
            $actions->disableView();
//            $actions->disableDelete();
        });
        $grid->id('Id');
        $grid->url('跳转地址');
        $grid->title('标题');
//        $grid->site('图片');
        $grid->site('图片')->image('', 100, 100);
        $grid->type('分类');
        $grid->remark('备注');
        $states = [
            'off' => ['value' => 1, 'text' => '显示', 'color' => 'success'],
            'on'  => ['value' => 0, 'text' => '隐藏', 'color' => 'danger'],
        ];
        $grid->status('状态')->switch($states);
        $grid->updated_at('更新时间');
        $grid->created_at('创建时间');

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
        $show = new Show(image::findOrFail($id));

        $show->id('Id');
        $show->url('Url');
        $show->site('Site');
        $show->remark('Remark');
        $show->status('Status');
        $show->updated_at('Updated at');
        $show->created_at('Created at');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $type =[
            'app'=>'app',
            'WEB'=>'WEB',
            'LOGO'=>'LOGO',
        ];
        $form = new Form(new image);
        $form->text('title', '标题');
        $form->text('url', '输入跳转链接')->default('#');
        $form->image('site','封面图片')->uniqueName();
        $form->select('type','分类')->options($type);
        $form->ueditor('content', '输入内容');
        $form->textarea('remark', '输入备注');
        $states = [
            'on'  => ['value' => 0, 'text' => '隐藏', 'color' => 'danger'],
            'off' => ['value' => 1, 'text' => '显示', 'color' => 'success'],
        ];
        $form->switch('status','状态')->states($states)->default(1);
        return $form;
    }
}
