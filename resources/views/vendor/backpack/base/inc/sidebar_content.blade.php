<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li>
    <a href="{{ backpack_url('dashboard') }}">
        <i class="fa fa-tachometer-alt"></i>
        <span>{{ trans('backpack::base.dashboard') }}</span>
    </a>
</li>

@can(\App\Models\BackpackUser::PERMISSION_ABOUT_PAGES_ADMIN_VIEW)
  <li>
      <a href="{{ backpack_url('aboutpage') }}">
          <i class="fa fa-files-o"></i>
          <span>About Pages</span>
      </a>
  </li>
@endcan

<li>
  <a href='{{ backpack_url('blogpost') }}'>
    <i class='fa fa-newspaper'></i>
    <span>Blog Posts</span>
  </a>
</li>

@can(\App\Models\BackpackUser::PERMISSION_EVENTS_ADMIN_VIEW)
  <li>
      <a href="{{ backpack_url('event') }}">
          <i class="fa fa-calendar"></i>
          <span>Events</span>
      </a>
  </li>
@endcan


@role(\App\Models\BackpackUser::ROLE_ADMIN)

<li>
  <a href='{{ backpack_url('localgroup') }}'>
    <i class="fa fa-map-marker"></i>
    <span>Local Groups</span>
  </a>
</li>

<li class="treeview">
  <a href="#">
    <i class="fa fa-folder-open"></i>
    <span>Resource Library</span>
    <i class="fa fa-angle-left pull-right"></i>
  </a>
  <ul class="treeview-menu">
    <li>
      <a href='{{ backpack_url('item') }}'>
        <i class='fa fa-sticky-note'></i>
        <span>Items</span>
      </a>
    </li>

    <li>
      <a href='{{ backpack_url('item_type') }}'>
        <i class='fa fa-list-ul'></i>
        <span>Item Types</span>
      </a>
    </li>

    <li>
      <a href='{{ backpack_url('item_tag') }}'>
        <i class='fa fa-tag'></i>
        <span>Item Tags</span>
      </a>
    </li>
  </ul>
</li>


<li class="treeview">
    <a href="#">
        <i class="fa fa-group"></i>
        <span>Users, Roles, Permissions</span>
        <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
        <li>
            <a href="{{ backpack_url('user') }}">
                <i class="fa fa-user"></i>
                <span>Users</span>
            </a>
        </li>
        <li>
            <a href="{{ backpack_url('role') }}">
                <i class="fa fa-group"></i>
                <span>Roles</span>
            </a>
        </li>
        <li>
            <a href="{{ backpack_url('permission') }}">
                <i class="fa fa-key"></i>
                <span>Permissions</span>
            </a>
        </li>
    </ul>
</li>
@endrole
