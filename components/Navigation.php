<?php 

namespace app\components;

use Yii;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\Dropdown;
use yii\base\InvalidConfigException;
use yii\helpers\ArrayHelper;

class Navigation extends Nav
{
	public $submenuOptions;

    public $dropDownCaret = '';

	protected function renderDropdown($items, $parentItem)
    {
    	$lines = [];

        foreach ($items as $item) {
            if (isset($item['visible']) && !$item['visible']) {
                continue;
            }
            if (is_string($item)) {
                $lines[] = $item;
                continue;
            }
            if (!array_key_exists('label', $item)) {
                throw new InvalidConfigException("The 'label' option is required.");
            }
            $encodeLabel = isset($item['encode']) ? $item['encode'] : $this->encodeLabels;
            $label = $encodeLabel ? Html::encode($item['label']) : $item['label'];
            $itemOptions = ArrayHelper::getValue($item, 'options', []);
            $linkOptions = ArrayHelper::getValue($item, 'linkOptions', []);

            $linkOptions['tabindex'] = '-1';
            $url = array_key_exists('url', $item) ? $item['url'] : null;

            if (empty($item['items'])) {
                if ($url === null) {
                    $content = $label;
                  //  Html::addCssClass($itemOptions, ['widget' => 'dropdown-header']);
                } else {
                    $content = Html::a($label, $url, $linkOptions);
                }
            } else {
                $submenuOptions = $this->submenuOptions;
                if (isset($item['submenuOptions'])) {
                    $submenuOptions = array_merge($submenuOptions, $item['submenuOptions']);
                }
                $content = Html::a($label, $url === null ? '' : $url, $linkOptions)
                    . $this->renderDropdown($item['items'], $submenuOptions);
                //Html::addCssClass($itemOptions, ['widget' => 'dropdown-submenu']);
            }

            $lines[] = Html::tag('li', $content, $itemOptions);
        }

        return '<ul class="acc-menu">'.implode("\n", $lines).'</ul>';//$parentItem
    }
}

