{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        @if (!Auth::user()->hasRole('user'))
                            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                        @endif
                        <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" style="border: none !important;outline: none;"
                                    class="nav-link border-0 bg-transparent">
                                    <i class="fas fa-sign-out-alt mr-1"></i>{{ __('Logout') }}
                                </button>
                            </form>
                        </li>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <g clip-path="url(#clip0)" fill="#EF3B2D">
                            <path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/>
                        </g>
                    </svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-500"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" /></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-500"><path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" /></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-500"><path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" /></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-500"><path stroke-linecap="round" stroke-linejoin="round" d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" /></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html> --}}

@extends('frontend.layouts.app')

@section('pageTitle' , __('Home'))

@section('page_style')
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">
@endsection

@section('content')

    <!-- main-area -->
    <main>

        <!-- banner-area -->
        <section class="banner">
            <div class="container custom-container h-100">
                <div class="row align-items-center  h-100 justify-content-center justify-content-lg-between">
                    <div class="col-lg-6 order-0 order-lg-2">
                        <div class="banner__img text-center text-xxl-end">
                            <img src="{{ asset('uploads/frontend/'.$header->image) }}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="banner__content">
                            <h2 class="title wow fadeInUp" data-wow-delay=".2s"><span>{{ $header->title }}</span></h2>
                            <p class="wow fadeInUp" data-wow-delay=".4s">{{ $header->description }}</p>
                            <a href="about.html" class="btn banner__btn wow fadeInUp" data-wow-delay=".6s">{{__('More About Me')}}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="scroll__down">
                <a href="#aboutSection" class="scroll__link">Scroll down</a>
            </div>
            <div class="banner__video">
                <a href="{{ $header->video }}" class="popup-video"><i class="fas fa-play"></i></a>

        </section>
        <!-- banner-area-end -->

        <!-- about-area -->
        <section id="aboutSection" class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <ul class="about__icons__wrap">
                            @foreach ($skills as $name => $image)
                                <li>
                                    <img class="light" src="{{ asset('uploads/frontend/skills/'.$image) }}" alt="{{ $name }}">
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="about__content">
                            <div class="section__title">
                                <span class="sub-title">01 - About me</span>
                                <h2 class="title">{{ $about->title }}</h2>
                            </div>
                            <div class="about__exp">
                                <div class="about__exp__icon">
                                    <img src="{{ asset('frontend/assets/img/icons/about_icon.png') }}" alt="">
                                </div>
                                <div class="about__exp__content">
                                    <p>{{ $about->experience }}</p>
                                </div>
                            </div>
                            <p class="desc">{{ $about->mini_description }}</p>
                            <a href="{{ asset('uploads/frontend/about/'.$about->resume) }}" download class="btn">{{__('Download My Resume')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-area-end -->

        <!-- services-area -->
        <section class="services">
            <div class="container">
                <div class="services__title__wrap">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-5 col-lg-6 col-md-8">
                            <div class="section__title">
                                <span class="sub-title">02 - my Services</span>
                                <h2 class="title">Creates amazing digital experiences</h2>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 col-md-4">
                            <div class="services__arrow"></div>
                        </div>
                    </div>
                </div>
                <div class="row gx-0 services__active">
                    <div class="col-xl-3">
                        <div class="services__item">
                            <div class="services__thumb">
                                <a href="services-details.html"><img src="{{ asset('frontend/assets/img/images/services_img01.jpg') }}" alt=""></a>
                            </div>
                            <div class="services__content">
                                <div class="services__icon">
                                    <img class="light" src="{{ asset('frontend/assets/img/icons/services_light_icon01.png') }}" alt="">
                                    <img class="dark" src="{{ asset('frontend/assets/img/icons/services_icon01.png') }}" alt="">
                                </div>
                                <h3 class="title"><a href="services-details.html">Business Strategy</a></h3>
                                <p>Strategy is a forward-looking plan for your brand’s behavior. Strategy is a forward-looking plan.</p>
                                <ul class="services__list">
                                    <li>Research & Data</li>
                                    <li>Branding & Positioning</li>
                                    <li>Business Consulting</li>
                                    <li>Go To Market</li>
                                </ul>
                                <a href="services-details.html" class="btn border-btn">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="services__item">
                            <div class="services__thumb">
                                <a href="services-details.html"><img src="{{ asset('frontend/assets/img/images/services_img02.jpg') }}" alt=""></a>
                            </div>
                            <div class="services__content">
                                <div class="services__icon">
                                    <img class="light" src="{{ asset('frontend/assets/img/icons/services_light_icon02.png') }}" alt="">
                                    <img class="dark" src="{{ asset('frontend/assets/img/icons/services_icon02.png') }}" alt="">
                                </div>
                                <h3 class="title"><a href="services-details.html">Brand Strategy</a></h3>
                                <p>Strategy is a forward-looking plan for your brand’s behavior. Strategy is a forward-looking plan.</p>
                                <ul class="services__list">
                                    <li>User Research & Testing</li>
                                    <li>UX Design</li>
                                    <li>Visual Design</li>
                                    <li>Information Architecture</li>
                                </ul>
                                <a href="services-details.html" class="btn border-btn">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="services__item">
                            <div class="services__thumb">
                                <a href="services-details.html"><img src="{{ asset('frontend/assets/img/images/services_img03.jpg') }}" alt=""></a>
                            </div>
                            <div class="services__content">
                                <div class="services__icon">
                                    <img class="light" src="{{ asset('frontend/assets/img/icons/services_light_icon03.png') }}" alt="">
                                    <img class="dark" src="{{ asset('frontend/assets/img/icons/services_icon03.png') }}" alt="">
                                </div>
                                <h3 class="title"><a href="services-details.html">Product Design</a></h3>
                                <p>Strategy is a forward-looking plan for your brand’s behavior. Strategy is a forward-looking plan.</p>
                                <ul class="services__list">
                                    <li>User Research & Testing</li>
                                    <li>UX Design</li>
                                    <li>Visual Design</li>
                                    <li>Information Architecture</li>
                                </ul>
                                <a href="services-details.html" class="btn border-btn">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="services__item">
                            <div class="services__thumb">
                                <a href="services-details.html"><img src="{{ asset('frontend/assets/img/images/services_img04.jpg') }}" alt=""></a>
                            </div>
                            <div class="services__content">
                                <div class="services__icon">
                                    <img class="light" src="{{ asset('frontend/assets/img/icons/services_light_icon04.png') }}" alt="">
                                    <img class="dark" src="{{ asset('frontend/assets/img/icons/services_icon04.png') }}" alt="">
                                </div>
                                <h3 class="title"><a href="services-details.html">Visual Design</a></h3>
                                <p>Strategy is a forward-looking plan for your brand’s behavior. Strategy is a forward-looking plan.</p>
                                <ul class="services__list">
                                    <li>User Research & Testing</li>
                                    <li>UX Design</li>
                                    <li>Visual Design</li>
                                    <li>Information Architecture</li>
                                </ul>
                                <a href="services-details.html" class="btn border-btn">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="services__item">
                            <div class="services__thumb">
                                <a href="services-details.html"><img src="{{ asset('frontend/assets/img/images/services_img03.jpg') }}" alt=""></a>
                            </div>
                            <div class="services__content">
                                <div class="services__icon">
                                    <img class="light" src="{{ asset('frontend/assets/img/icons/services_light_icon02.png') }}" alt="">
                                    <img class="dark" src="{{ asset('frontend/assets/img/icons/services_icon02.png') }}" alt="">
                                </div>
                                <h3 class="title"><a href="services-details.html">Web Development</a></h3>
                                <p>Strategy is a forward-looking plan for your brand’s behavior. Strategy is a forward-looking plan.</p>
                                <ul class="services__list">
                                    <li>User Research & Testing</li>
                                    <li>UX Design</li>
                                    <li>Visual Design</li>
                                    <li>Information Architecture</li>
                                </ul>
                                <a href="services-details.html" class="btn border-btn">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- services-area-end -->

        <!-- work-process-area -->
        <section class="work__process">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section__title text-center">
                            <span class="sub-title">03 - Working Process</span>
                            <h2 class="title">A clear product design process is the basis of success</h2>
                        </div>
                    </div>
                </div>
                <div class="row work__process__wrap">
                    <div class="col">
                        <div class="work__process__item">
                            <span class="work__process_step">Step - 01</span>
                            <div class="work__process__icon">
                                <img class="light" src="{{ asset('frontend/assets/img/icons/wp_light_icon01.png') }}" alt="">
                                <img class="dark" src="{{ asset('frontend/assets/img/icons/wp_icon01.png') }}" alt="">
                            </div>
                            <div class="work__process__content">
                                <h4 class="title">Discover</h4>
                                <p>Initial ideas or inspiration & Establishment of user needs.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="work__process__item">
                            <span class="work__process_step">Step - 02</span>
                            <div class="work__process__icon">
                                <img class="light" src="{{ asset('frontend/assets/img/icons/wp_light_icon02.png') }}" alt="">
                                <img class="dark" src="{{ asset('frontend/assets/img/icons/wp_icon02.png') }}" alt="">
                            </div>
                            <div class="work__process__content">
                                <h4 class="title">Define</h4>
                                <p>Interpretation & Alignment of findings to project objectives.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="work__process__item">
                            <span class="work__process_step">Step - 03</span>
                            <div class="work__process__icon">
                                <img class="light" src="{{ asset('frontend/assets/img/icons/wp_light_icon03.png') }}" alt="">
                                <img class="dark" src="{{ asset('frontend/assets/img/icons/wp_icon03.png') }}" alt="">
                            </div>
                            <div class="work__process__content">
                                <h4 class="title">Develop</h4>
                                <p>Design-Led concept and Proposals hearted & assessed</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="work__process__item">
                            <span class="work__process_step">Step - 04</span>
                            <div class="work__process__icon">
                                <img class="light" src="{{ asset('frontend/assets/img/icons/wp_light_icon04.png') }}" alt="">
                                <img class="dark" src="{{ asset('frontend/assets/img/icons/wp_icon04.png') }}" alt="">
                            </div>
                            <div class="work__process__content">
                                <h4 class="title">Deliver</h4>
                                <p>Process outcomes finalised & Implemented</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- work-process-area-end -->

        <!-- portfolio-area -->
        <section class="portfolio">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section__title text-center">
                            <span class="sub-title">04 - Portfolio</span>
                            <h2 class="title">All creative work</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-10 col-lg-12">
                        <ul class="nav nav-tabs portfolio__nav" id="portfolioTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button"
                                    role="tab" aria-controls="all" aria-selected="true">All</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="website-tab" data-bs-toggle="tab" data-bs-target="#website" type="button"
                                    role="tab" aria-controls="website" aria-selected="false">website</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="apps-tab" data-bs-toggle="tab" data-bs-target="#apps" type="button" role="tab" aria-controls="apps" aria-selected="false">mobile apps</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="dashboard-tab" data-bs-toggle="tab" data-bs-target="#dashboard" type="button"
                                    role="tab" aria-controls="dashboard" aria-selected="false">Dashboard</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="landing-tab" data-bs-toggle="tab" data-bs-target="#landing" type="button"
                                    role="tab" aria-controls="landing" aria-selected="false">landing page</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="branding-tab" data-bs-toggle="tab" data-bs-target="#branding" type="button"
                                    role="tab" aria-controls="branding" aria-selected="false">Branding</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="graphic-tab" data-bs-toggle="tab" data-bs-target="#graphic" type="button"
                                    role="tab" aria-controls="graphic" aria-selected="false">Graphic Design</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-content" id="portfolioTabContent">
                <div class="tab-pane show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                    <div class="container">
                        <div class="row gx-0 justify-content-center">
                            <div class="col">
                                <div class="portfolio__active">
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img01.jpg') }}" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Apps Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img02.jpg') }}" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img03.jpg') }}" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>UX/UI Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img04.jpg') }}" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img05.jpg') }}" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img06.jpg') }}" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img07.jpg') }}" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="website" role="tabpanel" aria-labelledby="website-tab">
                    <div class="container">
                        <div class="row gx-0 justify-content-center">
                            <div class="col">
                                <div class="portfolio__active">
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img07.jpg') }}" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Nature of Business Strategy System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img06.jpg') }}" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img01.jpg') }}" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Apps Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img02.jpg') }}" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img03.jpg') }}" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>UX/UI Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img04.jpg') }}" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img05.jpg') }}" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="apps" role="tabpanel" aria-labelledby="apps-tab">
                    <div class="container">
                        <div class="row gx-0 justify-content-center">
                            <div class="col">
                                <div class="portfolio__active">
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img06.jpg') }}" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Product Design and Development</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img01.jpg') }}" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Apps Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img02.jpg') }}" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img03.jpg') }}" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>UX/UI Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img04.jpg') }}" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img05.jpg') }}" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img07.jpg') }}" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                    <div class="container">
                        <div class="row gx-0 justify-content-center">
                            <div class="col">
                                <div class="portfolio__active">
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img05.jpg') }}" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Brand strategy System Management</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img01.jpg') }}" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Apps Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img02.jpg') }}" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img03.jpg') }}" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>UX/UI Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img04.jpg') }}" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img06.jpg') }}" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img07.jpg') }}" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="landing" role="tabpanel" aria-labelledby="landing-tab">
                    <div class="container">
                        <div class="row gx-0 justify-content-center">
                            <div class="col">
                                <div class="portfolio__active">
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img04.jpg') }}" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Visual Design System Management</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img01.jpg') }}" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Apps Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img02.jpg') }}" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img03.jpg') }}" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>UX/UI Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img05.jpg') }}" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img06.jpg') }}" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img07.jpg') }}" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="branding" role="tabpanel" aria-labelledby="branding-tab">
                    <div class="container">
                        <div class="row gx-0 justify-content-center">
                            <div class="col">
                                <div class="portfolio__active">
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img03.jpg') }}" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>UX/UI Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Animation Management System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img01.jpg') }}" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Apps Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img02.jpg') }}" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img04.jpg') }}" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img05.jpg') }}" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img06.jpg') }}" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img07.jpg') }}" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="graphic" role="tabpanel" aria-labelledby="graphic-tab">
                    <div class="container">
                        <div class="row gx-0 justify-content-center">
                            <div class="col">
                                <div class="portfolio__active">
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img02.jpg') }}" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Graphic Design Management System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img01.jpg') }}" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Apps Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img03.jpg') }}" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>UX/UI Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img04.jpg') }}" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img05.jpg') }}" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img06.jpg') }}" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img07.jpg') }}" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- portfolio-area-end -->

        <!-- partner-area -->
        <section class="partner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <ul class="partner__logo__wrap">
                            <li>
                                <img class="light" src="{{ asset('frontend/assets/img/icons/partner_light01.png') }}" alt="">
                                <img class="dark" src="{{ asset('frontend/assets/img/icons/partner_01.png') }}" alt="">
                            </li>
                            <li>
                                <img class="light" src="{{ asset('frontend/assets/img/icons/partner_light02.png') }}" alt="">
                                <img class="dark" src="{{ asset('frontend/assets/img/icons/partner_02.png') }}" alt="">
                            </li>
                            <li>
                                <img class="light" src="{{ asset('frontend/assets/img/icons/partner_light03.png') }}" alt="">
                                <img class="dark" src="{{ asset('frontend/assets/img/icons/partner_03.png') }}" alt="">
                            </li>
                            <li>
                                <img class="light" src="{{ asset('frontend/assets/img/icons/partner_light04.png') }}" alt="">
                                <img class="dark" src="{{ asset('frontend/assets/img/icons/partner_04.png') }}" alt="">
                            </li>
                            <li>
                                <img class="light" src="{{ asset('frontend/assets/img/icons/partner_light05.png') }}" alt="">
                                <img class="dark" src="{{ asset('frontend/assets/img/icons/partner_05.png') }}" alt="">
                            </li>
                            <li>
                                <img class="light" src="{{ asset('frontend/assets/img/icons/partner_light06.png') }}" alt="">
                                <img class="dark" src="{{ asset('frontend/assets/img/icons/partner_06.png') }}" alt="">
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="partner__content">
                            <div class="section__title">
                                <span class="sub-title">05 - partners</span>
                                <h2 class="title">I proud to have collaborated with some awesome companies</h2>
                            </div>
                            <p>I'm a bit of a digital product junky. Over the years, I've used hundreds of web and mobile apps in different industries and verticals. Eventually, I decided that it would be a fun challenge to try designing and building my own.</p>
                            <a href="contact.html" class="btn">Start a conversation</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- partner-area-end -->

        <!-- testimonial-area -->
        <section class="testimonial">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6 order-0 order-lg-2">
                        <ul class="testimonial__avatar__img">
                            <li><img src="{{ asset('frontend/assets/img/images/testi_img01.png') }}" alt=""></li>
                            <li><img src="{{ asset('frontend/assets/img/images/testi_img02.png') }}" alt=""></li>
                            <li><img src="{{ asset('frontend/assets/img/images/testi_img03.png') }}" alt=""></li>
                            <li><img src="{{ asset('frontend/assets/img/images/testi_img04.png') }}" alt=""></li>
                            <li><img src="{{ asset('frontend/assets/img/images/testi_img05.png') }}" alt=""></li>
                            <li><img src="{{ asset('frontend/assets/img/images/testi_img06.png') }}" alt=""></li>
                            <li><img src="{{ asset('frontend/assets/img/images/testi_img07.png') }}" alt=""></li>
                        </ul>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="testimonial__wrap">
                            <div class="section__title">
                                <span class="sub-title">06 - Client Feedback</span>
                                <h2 class="title">Happy clients feedback</h2>
                            </div>
                            <div class="testimonial__active">
                                <div class="testimonial__item">
                                    <div class="testimonial__icon">
                                        <i class="fas fa-quote-left"></i>
                                    </div>
                                    <div class="testimonial__content">
                                        <p>We are motivated by the satisfaction of our clients. Put your trust in us &share in our H.Spond Asset Management is made up of a team of expert, committed and experienced people with a passion for financial markets. Our goal is to achieve continuous.</p>
                                        <div class="testimonial__avatar">
                                            <span>Rasalina De Wiliamson</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial__item">
                                    <div class="testimonial__icon">
                                        <i class="fas fa-quote-left"></i>
                                    </div>
                                    <div class="testimonial__content">
                                        <p>We are motivated by the satisfaction of our clients. Put your trust in us &share in our H.Spond Asset Management is made up of a team of expert, committed and experienced people with a passion for financial markets. Our goal is to achieve continuous.</p>
                                        <div class="testimonial__avatar">
                                            <span>Rasalina De Wiliamson</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial__arrow"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-area-end -->

        <!-- blog-area -->
        <section class="blog">
            <div class="container">
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-9">
                        <div class="blog__post__item">
                            <div class="blog__post__thumb">
                                <a href="blog-details.html"><img src="{{ asset('frontend/assets/img/blog/blog_post_thumb01.jpg') }}" alt=""></a>
                                <div class="blog__post__tags">
                                    <a href="blog.html">Story</a>
                                </div>
                            </div>
                            <div class="blog__post__content">
                                <span class="date">13 january 2021</span>
                                <h3 class="title"><a href="blog-details.html">Facebook design is dedicated to what's new in design</a></h3>
                                <a href="blog-details.html" class="read__more">Read mORe</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-9">
                        <div class="blog__post__item">
                            <div class="blog__post__thumb">
                                <a href="blog-details.html"><img src="{{ asset('frontend/assets/img/blog/blog_post_thumb02.jpg') }}" alt=""></a>
                                <div class="blog__post__tags">
                                    <a href="blog.html">Social</a>
                                </div>
                            </div>
                            <div class="blog__post__content">
                                <span class="date">13 january 2021</span>
                                <h3 class="title"><a href="blog-details.html">Make communication Fast and Effectively.</a></h3>
                                <a href="blog-details.html" class="read__more">Read mORe</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-9">
                        <div class="blog__post__item">
                            <div class="blog__post__thumb">
                                <a href="blog-details.html"><img src="{{ asset('frontend/assets/img/blog/blog_post_thumb03.jpg') }}" alt=""></a>
                                <div class="blog__post__tags">
                                    <a href="blog.html">Work</a>
                                </div>
                            </div>
                            <div class="blog__post__content">
                                <span class="date">13 january 2021</span>
                                <h3 class="title"><a href="blog-details.html">How to increase your productivity at work - 2021</a></h3>
                                <a href="blog-details.html" class="read__more">Read mORe</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog__button text-center">
                    <a href="blog.html" class="btn">more blog</a>
                </div>
            </div>
        </section>
        <!-- blog-area-end -->

        <!-- contact-area -->
        <section class="homeContact">
            <div class="container">
                <div class="homeContact__wrap">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="section__title">
                                <span class="sub-title">07 - Say hello</span>
                                <h2 class="title">Any questions? Feel free <br> to contact</h2>
                            </div>
                            <div class="homeContact__content">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                                <h2 class="mail"><a href="mailto:Info@webmail.com">Info@webmail.com</a></h2>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="homeContact__form">
                                <form action="#">
                                    <input type="text" placeholder="Enter name*">
                                    <input type="email" placeholder="Enter mail*">
                                    <input type="number" placeholder="Enter number*">
                                    <textarea name="message" placeholder="Enter Massage*"></textarea>
                                    <button type="submit">Send Message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-area-end -->

    </main>
    <!-- main-area-end -->

@endsection

@section('page_script')
    <!-- JS here -->
    <script src="{{ asset('frontend/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/element-in-view.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
@endsection
