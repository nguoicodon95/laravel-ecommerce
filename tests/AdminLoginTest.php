<?php


class AdminLoginTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testGetLogin()
    {
        
        $this->visit($this->baseUrl.'/admin/login')
                    ->seePageIs($this->baseUrl.'/admin/login')
                    ->see('Mage2 Admin Login');
    }

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testPostLogin()
    {
        $this->visit('/admin/login')
                ->type('admin@admin.com', 'email')
                ->type('admin123', 'password')
                ->press('Login')
                ->seePageIs('/admin')
                ->see('Mage2 Admin');
    }

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testAdminLogout()
    {

        $this->visit($this->baseUrl.'/admin/logout')
            ->seePageIs($this->baseUrl.'/admin/login')
          ;
    }

    public function testAdminPasswordReset()
    {

        $this->visit($this->baseUrl.'/admin/password/reset')
            ->see('Reset Password')
            ->type('admin@admin.com','email')
            ->press('Send Password Reset Link')
            ->seePageIs('/admin/password/reset')
            ->see('We have e-mailed your password reset link!')

        ;
    }
}
