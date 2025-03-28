<?php

/*
 * This file is part of the "news" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace GeorgRinger\News\Hooks;

use GeorgRinger\News\Service\CategoryService;

/**
 * Userfunc to get alternative label
 */
class Labels
{
    /**
     * Generate additional label for category records
     * including the title of the parent category
     *
     * @param array $params
     */
    public function getUserLabelCategory(array &$params): void
    {
        if (!isset($params['row'], $params['row']['title'])) {
            return;
        }

        $showTranslationInformation = false;

        $getVars = $GLOBALS['TYPO3_REQUEST']->getQueryParams();
        if (isset($getVars['route']) && $getVars['route'] === '/record/edit'
            && isset($getVars['edit']) && is_array($getVars['edit'])
            && (isset($getVars['edit']['tt_content']) || isset($getVars['edit']['tx_news_domain_model_news']) || isset($getVars['edit']['sys_category']))
        ) {
            $showTranslationInformation = true;
        }

        if ($showTranslationInformation && is_array($params['row'])) {
            $params['title'] = CategoryService::translateCategoryRecord($params['row']['title'], $params['row']);
        } else {
            $params['title'] = $params['row']['title'];
        }
    }
}
