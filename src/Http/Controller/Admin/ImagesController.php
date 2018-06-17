<?php namespace Pixney\SwiperBlockExtension\Http\Controller\Admin;

use Pixney\SwiperBlockExtension\Image\Form\ImageFormBuilder;
use Pixney\SwiperBlockExtension\Image\Table\ImageTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class ImagesController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param ImageTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(ImageTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param ImageFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(ImageFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param ImageFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(ImageFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
