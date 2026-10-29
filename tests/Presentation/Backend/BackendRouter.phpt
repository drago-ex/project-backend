<?php declare(strict_types=1);

/**
 * Test: App\Presentation\Backend\BackendRouter
 */

use App\Presentation\Backend\BackendRouter;
use Nette\Http\Request;
use Nette\Http\UrlScript;
use Tester\Assert;

require __DIR__ . '/../../bootstrap.php';


function matchUrl(string $path): ?array
{
	return BackendRouter::create()->match(new Request(new UrlScript('http://example.com' . $path, '/')));
}


function buildUrl(array $params): ?string
{
	return BackendRouter::create()->constructUrl($params, new UrlScript('http://example.com/', '/'));
}


test('The administration is under /admin/ and starts with the Admin presenter', function () {
	Assert::equal(['presenter' => 'Backend:Admin', 'action' => 'default', 'lang' => 'cs'], matchUrl('/admin/'));
	Assert::equal(['presenter' => 'Backend:Admin', 'action' => 'default', 'lang' => 'cs'], matchUrl('/admin'));
	Assert::same('http://example.com/admin/', buildUrl(['presenter' => 'Backend:Admin', 'action' => 'default', 'lang' => 'cs']));
});


test('The language is an optional prefix', function () {
	Assert::equal(['presenter' => 'Backend:Admin', 'action' => 'default', 'lang' => 'en'], matchUrl('/en/admin/'));
	Assert::same('http://example.com/en/admin/', buildUrl(['presenter' => 'Backend:Admin', 'action' => 'default', 'lang' => 'en']));
});


test('Other presenters of the Backend module get their own address', function () {
	Assert::equal(['presenter' => 'Backend:Users', 'action' => 'edit', 'lang' => 'cs'], matchUrl('/admin/users/edit'));
	Assert::same('http://example.com/admin/users/edit', buildUrl(['presenter' => 'Backend:Users', 'action' => 'edit', 'lang' => 'cs']));
});


test('Addresses outside /admin/ are left to other routers', function () {
	Assert::null(matchUrl('/'));
	Assert::null(matchUrl('/home/'));
	Assert::null(buildUrl(['presenter' => 'Front:Home', 'action' => 'default', 'lang' => 'cs']));
});
