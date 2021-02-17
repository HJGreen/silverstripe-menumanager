<?php


use Heyday\MenuManager\MenuItem;
use SilverStripe\Dev\SapphireTest;

class MenuItemTest extends SapphireTest
{
    protected static $fixture_file = 'fixtures/MenuItemTest.yml';

    public function testPageLinkIsCorrect()
    {
        $menuItem = $this->objFromFixture(MenuItem::class, 'about');
        $this->assertEquals('/about/', $menuItem->Link);
    }

    public function testExternalLinkIsCorrect()
    {
        $menuItemExternal = $this->objFromFixture(MenuItem::class, 'external');
        $menuItemExternalWithPage = $this->objFromFixture(MenuItem::class, 'externalWithPage');
        $this->assertEquals('https://example.com/', $menuItemExternal->Link);
        $this->assertEquals('/about/', $menuItemExternalWithPage->Link);
    }

    public function testTitleOverride()
    {
        $menuItem = $this->objFromFixture(MenuItem::class, 'about');
        $this->assertEquals('Custom Title', $menuItem->MenuTitle);
    }
}
