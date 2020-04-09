<!-- Inclusion of this file overrides the same file in the vendor/ directory.
This is done to support the newer user and logout icons since we're pulling in a
newer version of Font Awesome CSS in Backpack. Without this override, the icons would be broken. -->

<div class="user-panel">
  <a class="pull-left image" href="{{ route('backpack.account.info') }}">
    <img src="{{ backpack_avatar_url(backpack_auth()->user()) }}" class="img-circle" alt="User Image">
  </a>
  <div class="pull-left info">
    <p><a href="{{ route('backpack.account.info') }}">{{ backpack_auth()->user()->name }}</a></p>
    <small><small><a href="{{ route('backpack.account.info') }}"><span><i class="fa fa-user-circle"></i> {{ trans('backpack::base.my_account') }}</span></a> &nbsp;  &nbsp; <a href="{{ backpack_url('logout') }}"><i class="fa fa-sign-out-alt"></i> <span>{{ trans('backpack::base.logout') }}</span></a></small></small>
  </div>
</div>
