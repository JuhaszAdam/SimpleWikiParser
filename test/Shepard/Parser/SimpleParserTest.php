<?php

namespace Shepard\Parser;

use Shepard\Entity\SimplePerson;
use Shepard\Provider\SimpleWikiProvider;

class SimpleParserTest extends \PHPUnit_Framework_TestCase
{
    public function testParse()
    {
        $parser = new SimpleParser();

        $person = $parser->parse($this->mockProvider()->readFile('...'));

        $this->assertInstanceOf($person, SimplePerson::class);
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    public function mockProvider()
    {
        $job = $this->getMockBuilder(SimpleWikiProvider::class)->getMock();
        $timezone = new \DateTimeZone("Europe/Budapest");
        $job->expects($this->any())
            ->method('readFile')
            ->will($this->returnValue('<p>
    <b>Kent Beck</b>
    (
    <a href="/wiki/1961" title="1961">1961</a>
    -) amerikai<a href="/wiki/Szoftverfejleszt%C5%91" title="Szoftverfejlesztő">szoftverfejlesztő</a>, az
    <a href="/w/index.php?title=Extr%C3%A9m_programoz%C3%A1s&amp;action=edit&amp;redlink=1" class="new"
       title="Extrém programozás (a lap nem létezik)">extrém programozás
    </a>
    <sup id="cite_ref-Cworld92_1-0" class="reference">
        <a href="#cite_note-Cworld92-1">[1]</a>
    </sup>
    és a
    <a href="/w/index.php?title=Tesztvez%C3%A9relt_fejleszt%C3%A9s&amp;action=edit&amp;redlink=1" class="new"
       title="Tesztvezérelt fejlesztés (a lap nem létezik)">tesztvezérelt fejlesztés
    </a>
    <a href="/w/index.php?title=Szoftverfejleszt%C3%A9si_m%C3%B3dszertanok&amp;action=edit&amp;redlink=1" class="new"
       title="Szoftverfejlesztési módszertanok (a lap nem létezik)">szoftverfejlesztési módszertanok
    </a>
    megalkotója, valamint ő használta először az
    <a href="/w/index.php?title=Agilis_szoftver_fejleszt%C3%A9s&amp;action=edit&amp;redlink=1" class="new"
       title="Agilis szoftver fejlesztés (a lap nem létezik)">agilis szoftver fejlesztés
    </a>
    kifejezést is. Beck egyike volt az
    <a href="/w/index.php?title=Agile_Manifesto&amp;action=edit&amp;redlink=1" class="new"
       title="Agile Manifesto (a lap nem létezik)">Agile Manifesto
    </a>
    17 eredeti aláírójának 2001-ben.
    <sup id="cite_ref-Cworld92_1-1" class="reference">
        <a href="#cite_note-Cworld92-1">[1]</a>
    </sup>
</p>
<p>A<a href="/w/index.php?title=University_of_Oregon&amp;action=edit&amp;redlink=1" class="new"
       title="University of Oregon (a lap nem létezik)">University of Oregon</a>-ra járt 1979 és 1987 között, itt
    szerezte a
    <a href="/wiki/BSc" title="BSc">BSc</a>
    és
    <a href="/wiki/MSc" title="MSc">MSc</a>
    fokozatait<a href="/wiki/Sz%C3%A1m%C3%ADt%C3%A1studom%C3%A1ny" title="Számítástudomány">számítástudományból</a>.
    <sup id="cite_ref-2" class="reference">
        <a href="#cite_note-2">[2]</a>
    </sup>
    Úttörő volt a<a href="/wiki/Programtervez%C3%A9si_mint%C3%A1k" title="Programtervezési minták" class="mw-redirect">
        programtervezési minták</a>, az újra felfedezett<a
            href="/w/index.php?title=Teszt_vez%C3%A9relt_fejleszt%C3%A9s&amp;action=edit&amp;redlink=1" class="new"
            title="Teszt vezérelt fejlesztés (a lap nem létezik)">teszt vezérelt fejlesztés</a>, valamint a
    <a href="/w/index.php?title=Smalltalk&amp;action=edit&amp;redlink=1" class="new"
       title="Smalltalk (a lap nem létezik)">Smalltalk
    </a>
    kereskedelmi alkalmazásai területén. Beck népszerűsítette a
    <a href="/w/index.php?title=CRC_k%C3%A1rty%C3%A1k&amp;action=edit&amp;redlink=1" class="new"
       title="CRC kártyák (a lap nem létezik)">CRC kártyákat
    </a>
    <a href="/w/index.php?title=Ward_Cunningham&amp;action=edit&amp;redlink=1" class="new"
       title="Ward Cunningham (a lap nem létezik)">Ward Cunningham</a>-mel, továbbá<a href="/wiki/Erich_Gamma"
                                                                                      title="Erich Gamma">Erich
        Gamma</a>-val létrehozták a
    <a href="/wiki/JUnit" title="JUnit">JUnit</a>
    <a href="/w/index.php?title=Egys%C3%A9gteszt&amp;action=edit&amp;redlink=1" class="new"
       title="Egységteszt (a lap nem létezik)">egységteszt
    </a>
    keretrendszert.
</p>
<p>Beck USA-ban,<a href="/w/index.php?title=Medford,_Oregon&amp;action=edit&amp;redlink=1" class="new"
                   title="Medford, Oregon (a lap nem létezik)">Medford, Oregon</a>-ban él és a<a href="/wiki/Facebook"
                                                                                                 title="Facebook">
    Facebook</a>-nál dolgozik.
    <sup id="cite_ref-3" class="reference">
        <a href="#cite_note-3">[3]</a>
    </sup>
</p>
'));

        return $job;
    }
}

