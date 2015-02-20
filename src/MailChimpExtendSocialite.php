<?php
namespace SocialiteProviders\MailChimp;

use SocialiteProviders\Manager\SocialiteWasCalled;

class MailChimpExtendSocialite
{
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('mailchimp', __NAMESPACE__.'\Provider');
    }
}
