<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        <li class="has_megamenu">
            <a href="#" style="font-weight: bold;">All Categories <i
                    class="fa fa-arrow-down" aria-hidden="true"></i></a>
            <div class="dropdown_megamenu">
                <div class="megamnu_module">
                    <div class="menu_items">
                        <div class="menu_column">
                            <ul>
                                @foreach ($categories as $item)
                                <li class="title" style="font-weight: bold;">{{$item->cat_name}}</li>
                                @foreach ($item->subcategory as $sub)
                                <li>
                                    <a href="cars.html">{{$sub->subcat_name}}</a>
                                </li>
                                @endforeach

                                @endforeach
                               

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </li>

        @foreach ($categories as $item)
        <li class="has_dropdown">
            <a href="mobilephones.html">{{$item->cat_name}}</a>

        </li>
        @endforeach

        
    </ul>
</div>