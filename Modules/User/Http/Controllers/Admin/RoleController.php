<?php

namespace Modules\User\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\App\Traits\HasCrudActions;
class RoleController extends Controller
{
    use HasCrudActions;
    /**
     * Model for the resource.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Label of the resource.
     *
     * @var string
     */
    protected $label = 'user::roles.role';

    /**
     * View path of the resource.
     *
     * @var string
     */
    protected $viewPath = 'user::admin.roles';

    /**
     * Form requests for the resource.
     *
     * @var array|string
     */
    protected $validation = SaveRoleRequest::class;
}
