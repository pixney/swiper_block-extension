<?php

namespace Pixney\SwiperBlockExtension\Http\Controller\Admin;

use Pixney\SwiperBlockExtension\Block\Form\BlockFormBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;
use Pixney\SwiperBlockExtension\Block\Table\BlockTableBuilder;

class BlockController extends AdminController
{
    /**
     * Display an index of existing entries.
     *
     * @param BlockTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(BlockTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param BlockFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(BlockFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param BlockFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(BlockFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
