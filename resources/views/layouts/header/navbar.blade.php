<div class="header__navbar">
	<div class="header__navbar-departments">
		<div class="departments">
			<button class="departments__button" type="button">
				<span class="departments__button-icon">
					@include('svg.sidebar')
				</span>
				<span class="departments__button-title">
					@lang('Menu')
				</span>
				<span class="departments__button-arrow">
					@include('svg.button_arrow')
				</span>
			</button>
			@include('layouts.header.megamenu')
		</div>
	</div>
	{{-- Left navigation start --}}
	<div class="header__navbar-menu">
		<div class="main-menu">
			<ul class="main-menu__list">
				{{-- Home button --}}
				<li class="main-menu__item">
					<a href="/" class="main-menu__link home-menu">@lang('Home')</a>
				</li>
				{{-- Shop button --}}
				<li class="main-menu__item main-menu__item--submenu--menu main-menu__item--has-submenu">
					<a href="/shop-grid-4-columns-sidebar" class="main-menu__link">
						@lang('Shop') @include('svg.arrow_down')
					</a>
					<div class="main-menu__submenu">
						<ul class="menu">
							@foreach ($categories as $category)
							<li class="menu__item">
								<a href="{{ route('category', ['category' => $category]) }}" class="menu__link">
									{{ $category->name }}
								</a>
							</li>
							@endforeach
						</ul>
					</div>
				</li>
				{{-- Account button --}}
				<li class="main-menu__item main-menu__item--submenu--menu main-menu__item--has-submenu">
					<a href="@guest /login @else # @endguest" class="main-menu__link">
						@lang('Account') @include('svg.arrow_down')
					</a>
					<div class="main-menu__submenu">
						<ul class="menu">
							@guest
							<li class="menu__item">
								<a href="/login" class="menu__link">
									@lang('Login')
								</a>
							</li>
							<li class="menu__item">
								<a href="/register" class="menu__link">
									@lang('Register')
								</a>
							</li>
							@else
							<li class="menu__item">
								<a href="/dashboard" class="menu__link">
									@lang('Dashboard')
								</a>
							</li>
							<li class="menu__item">
								<a href="/garage" class="menu__link">
									@lang('Garage')
								</a>
							</li>
							<li class="menu__item">
								<a href="/account/profile" class="menu__link">
									@lang('Edit Profile')
								</a>
							</li>
							<li class="menu__item">
								<a href="/account/orders" class="menu__link">
									@lang('Order History')
								</a>
							</li>
							<li class="menu__item">
								<a href="/account/addresses" class="menu__link">
									@lang('Addresses')
								</a>
							</li>
							@endguest
						</ul>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
