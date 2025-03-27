<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('index.html.twig');
    }

    #[Route('/admin-add-films', name: 'app_admin_add_films')]
    public function addFilms(): Response
    {
        return $this->render('admin/admin_add_films.html.twig');
    }

    #[Route('/admin-films', name: 'app_admin_films')]
    public function films(): Response
    {
        return $this->render('admin/admin_films.html.twig');
    }

    #[Route('/admin-users', name: 'app_admin_users')]
    public function users(): Response
    {
        return $this->render('admin/admin_users.html.twig');
    }

    #[Route('/admin', name: 'app_admin')]
    public function admin(): Response
    {
        return $this->render('admin/admin.html.twig');
    }

    #[Route('/category', name: 'app_category')]
    public function category(): Response
    {
        return $this->render('category/category.html.twig');
    }

    #[Route('/confirm', name: 'app_confirm')]
    public function confirm(): Response
    {
        return $this->render('confirm.html.twig');
    }

    #[Route('/detail-serie', name: 'app_detail_serie')]
    public function detailSerie(): Response
    {
        return $this->render('details/detail_serie.html.twig');
    }

    #[Route('/detail', name: 'app_detail')]
    public function detail(): Response
    {
        return $this->render('details/detail.html.twig');
    }

    #[Route('/discover', name: 'app_discover')]
    public function discover(): Response
    {
        return $this->render('discover.html.twig');
    }

    #[Route('/forgot', name: 'app_forgot')]
    public function forgot(): Response
    {
        return $this->render('forgot.html.twig');
    }

    #[Route('/lists', name: 'app_lists')]
    public function lists(): Response
    {
        return $this->render('lists.html.twig');
    }

    #[Route('/login', name: 'app_login')]
    public function login(): Response
    {
        return $this->render('auth/login.html.twig');
    }

    #[Route('/register', name: 'app_register')]
    public function register(): Response
    {
        return $this->render('auth/register.html.twig');
    }

    #[Route('/reset', name: 'app_reset')]
    public function reset(): Response
    {
        return $this->render('reset.html.twig');
    }

    #[Route('/subscriptions', name: 'app_subscriptions')]
    public function subscriptions(): Response
    {
        return $this->render('subscriptions.html.twig');
    }

    #[Route('/upload', name: 'app_upload')]
    public function upload(): Response
    {
        return $this->render('upload.html.twig');
    }
}
