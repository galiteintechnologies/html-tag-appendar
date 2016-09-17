<?php

namespace HtmlTagAppendar\Tests;

use HtmlTagAppendar\StringTagAppendar;

class StringTagAppendarTest extends \PHPUnit_Framework_TestCase {
    
    /**
     * @test
     */
    public function appendAroundTest()
    {
        $stringTagAppendar = new StringTagAppendar();
        
        $content = "This content has some dummy text. I want to highlight dummy text with bold tag.";        
        
        $actualResult = $stringTagAppendar->appendAround($content, "dummy", "<b>");        
        
        $expectedResult = "This content has some <b>dummy</b> text. I want to highlight <b>dummy</b> text with bold tag.";
        
        $this->assertEquals($expectedResult, $actualResult);
    }
}
