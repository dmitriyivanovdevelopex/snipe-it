<?php

namespace App\Policies;

use App\Models\User;

class AssetPolicy extends CheckoutablePermissionsPolicy
{
    protected function columnName()
    {
        return 'assets';
    }

    public function viewRequestable(User $user, Asset $asset = null)
    {
        return $user->hasAccess('assets.view.requestable');
    }

    public function audit(User $user, Asset $asset = null)
    {
        return $user->hasAccess('assets.audit');
    }

    public function selfAssign(User $user)
    {
        \Log::log('debug', 'selfAssign');
        return $user->hasPermission('self.checkout_assets');
    }
}
