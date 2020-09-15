<?php

namespace Tests\Feature;

use App\Models\Tree;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class PagesTest extends TestCase
{
   // use DatabaseTransactions;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testPagesStatuses()
    {
        $this->withoutExceptionHandling();

        $links = $this->getUrlsArr();
        $response = $this->get('http://oberig.vis/en');
        $response->assertStatus(200);

        exit();

        foreach ($links as $link) {
            $response = $this->get($link);
            $response->assertStatus(200);
        }
    }

    public function getUrlsArr()
    {
        $xmlString = $this->get(route('sitemap'))->getContent();
        $document = new \DOMDocument;
        $document->loadXML($xmlString);
        $xpath = new \DOMXpath($document);
        $xpath->registerNameSpace('s', 'http://www.sitemaps.org/schemas/sitemap/0.9');
        $xpath->registerNameSpace('x', 'http://www.w3.org/1999/xhtml');

        foreach ($xpath->evaluate('//s:url') as $url) {
            $data[] = [
                $xpath->evaluate('string(x:link[@hreflang="en"]/@href)', $url),
                $xpath->evaluate('string(x:link[@hreflang="ru"]/@href)', $url),
                $xpath->evaluate('string(x:link[@hreflang="uk"]/@href)', $url),
            ];
        }

        foreach ($data as $linkCont) {
            foreach ($linkCont as $k => $link) {
                $links[] = $link;
            }
        }

        return $links;
    }
}
