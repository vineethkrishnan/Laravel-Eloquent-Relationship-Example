<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/cosmo/bootstrap.min.css"/>
    </head>
    <body>
        <br/><br/>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Customer ID</th>
                                <th>Customer Phone</th>
                                <th>Shops Phone</th>
                                <th>Owner Phone</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($owners as $owner)
                            @foreach($owner->customers as $customer)
                            <tr>
                                <td>{{$customer->id}}</td>
                                <td>{{$customer->phone}}</td>
                                <td>{{$customer->shop->phone}}</td>
                                <td>{{$customer->shop->owner->phone}}</td>
                            </tr>
                            @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
