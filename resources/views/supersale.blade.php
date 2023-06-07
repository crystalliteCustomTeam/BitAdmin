
@include('header')
@include('navbar')


<section>
    <div class="container mt-3 ">
        <div class="row g-2 ">
            <div class="col-12">
                <h2>Page Details</h2>
            </div>
            <div class="col-md-4  col-sm-12 col-lg-4">
                <div class="wrap border rounded d-flex align-items-center justify-content-center flex-column gap-4 "  style="height: 200px;background: #1e1541">
                    <img src="{{ asset('assets/images/supersale.png') }}" class="img-fluid" width="100" height="100px"/>
                    <div class="wrap">
                        <h4 class="text-light">SuperSale Leads</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4  col-sm-12 col-lg-4">
                <div class="wrap border rounded d-flex align-items-center ps-2 justify-content-center flex-column "  style="height: 200px;background: #1e1541">
                    <h5 class="text-light">Total Leads</h5>
                    <h4 class="text-light" style="font-size: 70px;font-weight: 900;">{{$count}}</h4>
                </div>
            </div>
            <div class="col-md-4  col-sm-12 col-lg-4">
                <div class="wrap border rounded d-flex align-items-center ps-2 justify-content-center flex-column "  style="height: 200px;background: #1e1541">
                    <h5 class="text-light">Page Views</h5>
                    <h4 class="text-light" style="font-size: 70px;font-weight: 900;">{{$count}}</h4>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mt-5">
    <div class="container mt-3 ">
        <div class="row g-2 ">
            <div class="col-12">
                <h2>Add Review</h2>
            </div>
            <div class="col-md-12  col-sm-12 col-lg-12">
                <div class="wrap border rounded  p-2" >
                    <form action="/facebook-proceess" class="form" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <lable>Name</lable>
                                    <input type="text" name="name" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-12">
                                <div class="form-group">
                                    <lable>Rating</lable>
                                    <br>
                                    <input type="radio" name="rating" class="form-check-input" value="1">
                                    <input type="radio" name="rating" class="form-check-input" value="2">
                                    <input type="radio" name="rating" class="form-check-input" value="3">
                                    <input type="radio" name="rating" class="form-check-input" value="4">
                                    <input type="radio" name="rating" class="form-check-input" value="5">
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <lable>Date</lable>
                                    <select name="date" class="form-control">
                                        <option value="3 Years Ago">3 Years Ago</option>
                                        <option value="2 Years Ago">2 Years Ago</option>
                                        <option value="1 Year Ago">1 Year Ago</option>
                                        <option value="6 Months Ago">6 Months Ago</option>
                                        <option value="5 Months Ago">5 Months Ago</option>
                                        <option value="4 Months Ago">4 Months Ago</option>
                                        <option value="3 Weeks Ago">3 Weeks Ago</option>
                                        <option value="2 Weeks Ago">2 Weeks Ago</option>]
                                        <option value="5 Days Ago">5 Days Ago</option>
                                        <option value="3 Days Ago">3 Days Ago</option>
                                        <option value="2 Days Ago">2 Days Ago</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 mt-2 col-sm-12">
                                <div class="form-group">
                                    <lable>Message</lable>
                                    <textarea name="message" id=""  class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 mt-2 col-sm-12">
                                <div class="form-group">
                                    <input type="submit" value="Add Review" class="btn btn-success">
                                    @if (session()->has('status'))
                                        <div class="alert alert-info mt-2">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="mt-5">
    <div class="container mt-3 ">
        <div class="row g-2 ">
            <div class="col-12">
                <h2>Main Website</h2>
            </div>
            <div class="col-md-12  col-sm-12 col-lg-12">
                <div class="wrap border rounded p-2"  >
                    <table id="googlepagetable" class="table table-striped">
                        <thead>
                        <tr>
                            <td>Name</td>
                            <td>Rating</td>
                            <td>Date</td>
                            <td>Message</td>
                            <td>Action</td>
                        </tr>
                        </thead>
                        <tbody>
                        @if($reviews)
                            @foreach($reviews as $review)
                                <tr>
                                    <td>{{$review->name}}</td>
                                    <td>{{$review->rating}}</td>
                                    <td>{{$review->date}}</td>
                                    <td>{{$review->message}}</td>
                                    <td><a href="/reviewDel/{{$review->id}}" class="btn btn-danger">Delete</a></td>
                                </tr>
                            @endforeach
                        @endif

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</section>




@include('footer')
