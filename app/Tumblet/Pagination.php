<?php
/**
 * Created by PhpStorm.
 * User: meph
 * Date: 3/14/15
 * Time: 12:10 PM
 */

namespace Tumblet\Tumblet;

use Illuminate\Pagination\BootstrapThreePresenter;

class Pagination extends BootstrapThreePresenter{

    public function render ()
    {
        if ($this->hasPages()) {
            return sprintf(
                '<ul class="pagination" aria-label="Pagination">%s %s %s</ul></div>',
                $this->getPreviousButton(),
                $this->getLinks(),
                $this->getNextButton()
            );
        }
        return sprintf('');
    }


    /**
     * Get HTML wrapper for disabled text.
     *
     * @param  string  $text
     * @return string
     */
    protected function getDisabledTextWrapper($text)
    {
        return '<li class="disabled" aria-disabled="true"><a href="">'.$text.'</a></li>';
    }

    /**
     * Get HTML wrapper for active text.
     *
     * @param  string  $text
     * @return string
     */
    protected function getActivePageWrapper($text)
    {
        return '<li class="active"><a href="">'.$text.'</a></li>';
    }

    /**
     * Get a pagination "dot" element.
     *
     * @return string
     */
    protected function getDots()
    {
        return $this->getDisabledTextWrapper('&hellip;');
    }
}