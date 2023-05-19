@section('posts-h')

<head>

<!-- CSS -->
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha256-IdfIcUlaMBNtk4Hjt0Y6WMMZyMU0P9PN/pH+DFzKxbI=" crossorigin="anonymous" />


<!-- Script -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>

<header class="max-w-xl mx-auto mt-20 text-center">
            <h1 class="text-4xl">
                Latest <span class="text-blue-500">Laravel From Scratch</span> News
            </h1>

            <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-4">
                <!--  Category -->
                <div class="relative lg:inline-flex items-center bg-gray-100 rounded-xl">
                    @include('components.category-dropdown')

                </div>

                <!-- Other Filters -->
                <!-- <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">
                    <select class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold">
                        <option value="category" disabled selected>Other Filters
                        </option>
                        <option value="foo">Foo
                        </option>
                        <option value="bar">Bar
                        </option>
                    </select>

                    <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="22"
                         height="22" viewBox="0 0 22 22">
                        <g fill="none" fill-rule="evenodd">
                            <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                            </path>
                            <path fill="#222"
                                  d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                        </g>
                    </svg>
                </div> -->

                <!-- Search -->
                <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
                    <form method="GET" action="/">

                        @if (request('category'))
                            <input type="hidden" name="category" value="{{ request('category') }}">
                        @endif

                        <input type="text" name="search" placeholder="Find something"
                               class="bg-transparent placeholder-black font-semibold text-sm"
                               value="{{ request('search') }}"
                               >
                        
                    </form>

                   
                        @include('searchDemo')
                    
                </div>
            </div>
<!--     <script type="text/javascript">
        // var usuarios = ['Christian', 'Alexander', 'Adrián', 'Brenda', 'Haans',
        //                 'Christopher', 'Alejandra', 'Bruno', 'Pepe', 'Paco',
        //                 'Mariana', 'María', 'Marisol'
        //                 ];
    
        // $('#buscador').autocomplete({
        //     source: usuarios
        // });
        var route = "{{ url('autocomplete-search') }}";
        $('#buscador').typeahead({
            source: function (query, process) {
                return $.get(route, {query: query},
                function (data) {
                    return process(data);
                });
            }
        });
    </script> -->
</header>



@endsection
