   <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Monir 
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="{{ Request::is('admin/dashboard*') ? 'active': '' }}">
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/category*') ? 'active': '' }}">
                        <a href="{{route('category.index')}}">
                            <i class="material-icons">category</i>
                            <p>Category</p>
                        </a>
                    </li>
                     <li class="{{ Request::is('admin/item*') ? 'active': '' }}">
                        <a href="{{route('item.index')}}">
                            <i class="material-icons">free_breakfast</i>
                            <p>Item</p>
                        </a>
                    </li>
                     <li class="{{ Request::is('admin/reservation*') ? 'active': '' }}">
                        <a href="{{route('reservation.index')}}">
                            <i class="material-icons">view_agenda</i>
                            <p>Reservation</p>
                        </a>
                    </li>
                     <li class="{{ Request::is('admin/slider*') ? 'active': '' }}">
                        <a href="{{route('slider.index')}}">
                            <i class="material-icons">slideshow</i>
                            <p>Slider</p>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/contact*') ? 'active': '' }}">
                        <a href="{{route('contact.index')}}">
                            <i class="material-icons">Contact</i>
                            <p>Contact Us</p>
                        </a>
                    </li>
                  
                </ul>
            </div>