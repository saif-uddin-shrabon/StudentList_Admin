<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <body>
        <div class="container">

            {{-- <pre>

                {{print_r($users->toArray())}}

            </pre> --}}
              <div class="table-responsive col-12">
                <table class="table table-striped
                table-hover	
                table-borderless
                table-primary
                align-middle">
                    <thead class="table-light">
                        <caption>Table Name</caption>
                        <tr>
                            <th>Name</th>
                            <th>Email </th>
                            <th>created_at </th>
                        </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @foreach ($users as $user)
                            
                            <tr class="table-primary" >
                                <td scope="row">{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->created_at}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            
                        </tfoot>
                </table>
              </div>
              
                        
       

        </div>
    </body>
</html>
