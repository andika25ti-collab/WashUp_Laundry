<?php

namespace Tests\Feature;

use Tests\TestCase;

class WashUpLandingPageTest extends TestCase
{
    public function test_homepage_displays_the_washup_laundry_site_and_assets(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertSee('WashUp')
            ->assertSee('Laundry beres.')
            ->assertSee('Atur penjemputan')
            ->assertSee('washup/css/style.css')
            ->assertSee('washup/js/script.js')
            ->assertSee('HARGA YANG MUDAH DIPAHAMI')
            ->assertSee('WASHUP / PICKUP')
            ->assertSee('Login')
            ->assertSee(route('admin.dashboard'));
    }

    public function test_admin_dashboard_is_available_as_a_login_placeholder(): void
    {
        $this->get(route('admin.dashboard'))
            ->assertOk()
            ->assertSee('Dashboard Admin')
            ->assertSee('prototipe')
            ->assertSee('admin-dashboard.css')
            ->assertSee('prefers-reduced-motion')
            ->assertSee('Ringkasan operasional WashUp')
            ->assertSee('Perjalanan laundry')
            ->assertSee('laundry-machines.jpg')
            ->assertSee('Belum ada pesanan untuk ditampilkan');
    }

    public function test_old_cv_customer_question_and_admin_pages_are_not_available(): void
    {
        $this->get('/home')->assertNotFound();
        $this->get('/cv/1')->assertNotFound();
        $this->get('/pelanggan')->assertNotFound();
        $this->get('/admin/login')->assertNotFound();
    }
}
