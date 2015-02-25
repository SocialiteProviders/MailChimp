<?php
namespace SocialiteProviders\MailChimp;

use SocialiteProviders\Manager\SocialiteWasCalled;

class MailChimpExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'mailchimp', __NAMESPACE__.'\Provider'
        );
    }
}
