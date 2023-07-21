<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="active"> <a href="index.html"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a> </li>
                <li class="list-divider"></li>

                <li class="submenu"> <a href="#"><i class="fas fa-suitcase"></i> <span> Hotel </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="{{ route('hotel') }}"> All Booking </a></li>
                        <li><a href="edit-booking.html"> Edit Booking </a></li>
                        <li><a href="add-booking.html"> Add Booking </a></li>
                    </ul>
                </li>

                <li class="submenu"> <a href="#"><i class="fas fa-suitcase"></i> <span> Booking </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="{{ route('booking') }}"> All Booking </a></li>
                        <li><a href="edit-booking.html"> Edit Booking </a></li>
                        <li><a href="add-booking.html"> Add Booking </a></li>
                    </ul>
                </li>

                <li class="submenu"> <a href="#"><i class="fas fa-key"></i> <span> Rooms </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="{{ route('room') }}">All Rooms </a></li>
                        <li><a href="edit-room.html"> Edit Rooms </a></li>
                        <li><a href="add-room.html"> Add Rooms </a></li>
                    </ul>
                </li>

                <li class="submenu"> <a href="#"><i class="fas fa-key"></i> <span> RoomType </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="all-rooms.html">All Rooms </a></li>
                        <li><a href="edit-room.html"> Edit Rooms </a></li>
                        <li><a href="add-room.html"> Add Rooms </a></li>
                    </ul>
                </li>

                <li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Room Detail </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="all-staff.html">All Staff </a></li>
                        <li><a href="edit-staff.html"> Edit Staff </a></li>
                        <li><a href="add-staff.html"> Add Staff </a></li>
                    </ul>
                </li>
                <li><a href="chat.html"><i class="fas fa-comments"></i><span> Contact </span></a></li>
                <li> <a href="pricing.html"><i class="far fa-money-bill-alt"></i> <span>Billing</span></a> </li>

                <li> <a href="settings.html"><i class="fas fa-cog"></i> <span>Settings</span></a> </li>

            </ul>
        </div>
    </div>
</div>
