<li class="{{ Request::is('products*') ? 'active' : '' }}">
   <a href="{!! url('/products') !!}">Products</a>
</li>
<li class="{{ Request::is('categories*') ? 'active' : '' }}">
   <a href="{!! url('/categories') !!}">Categories</a>
</li>
