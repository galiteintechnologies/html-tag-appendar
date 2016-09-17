<?php

/*
 * This file is part of the Html Tag Appendar
 *
 * (c) Nexuslink Services
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace HtmlTagAppendar;

class StringTagAppendar {    

    /**
     * @param string $content
     * @param string $string
     * @param string $tag
     * 
     * @return string
     */
    public function appendAround($content, $string, $tag) {
        
        if(!empty($content) && !empty($string) && !empty($tag)) {
            $htmltag = str_replace('<', '', str_replace('>', '', $tag));
            
            return preg_replace(array('/'.$string.'/i'), array('<'.$htmltag.'>'.$string.'</'.$htmltag.'>'), $content);
        }
        
        return $content;
    }
    
}
