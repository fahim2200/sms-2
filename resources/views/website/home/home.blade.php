@extends('master.front.master')

@section('body')
    <section class="notice-section py-5">
        <div class="container">
            <div class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card card-body rounded-0">
                            <h3 class="card-title">Notice 1</h3>
                            <hr/>
                            <p class="card-text">Lorem ipsum dolor sit amet,s quisquam recusandae veritatis! Atque blanditiis inventore nemo obcaecati quae quas repudiandae vero. Atque</p>
                            <p class="card-text">Lorem sdam quis quisquam recusandae veritatis! Atque blanditiis inventore nemo obcaecati quae quas repudiandae vero. Atque</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card card-body">
                            <h3 class="card-title">Notice 2</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aperiam asperiores beatae consequatur cum nemo quibusdam quis quisquam recusandae veritatis! Atque blanditiis inventore nemo obcaecati quae quas repudiandae vero. Atque</p>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aperiam asperiores beatae consequatur cum nemo quibusdam quis quisquam recusandae veritatis! Atque blanditiis inventore nemo obcaecati quae quas repudiandae vero. Atque</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card card-body">
                            <h3 class="card-title">Notice 3</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aperiam asperiores beatae consequatur cum nemo quibusdam quis quisquam recusandae veritatis! Atque blanditiis inventore nemo obcaecati quae quas repudiandae vero. Atque</p>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aperiam asperiores beatae consequatur cum nemo quibusdam quis quisquam recusandae veritatis! Atque blanditiis inventore nemo obcaecati quae quas repudiandae vero. Atque</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{asset('/img/1.jpg')}}/" class="img-fluid rounded-start w-100 h-100" alt="" >
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <figure>
                                        <blockquote class="blockquote">
                                            <p>A well-known quote, contained in a blockquote element.</p>
                                        </blockquote>
                                        <figcaption class="blockquote-footer">
                                            Someone famous in <cite title="Source Title">Source Title</cite>
                                        </figcaption>
                                    </figure>
                                    <ul>
                                        <li>Course Feature One</li>
                                        <li>Course Feature Two</li>
                                        <li>Course Feature Three</li>
                                        <li>Course Feature Four</li>
                                        <li>Course Feature Five</li>
                                    </ul>
                                    <p class="card-text"><small class="text-muted">Last update 3min ago</small></p>
                                    <a href="{{route('course-detail')}}" class="btn btn-success">Read More</a>
                                    <a href="" class="btn btn-success float-end">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{asset('/img/1.jpg')}}/" class="img-fluid rounded-start w-100 h-100" alt="" >
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <figure>
                                        <blockquote class="blockquote">
                                            <p>A well-known quote, contained in a blockquote element.</p>
                                        </blockquote>
                                        <figcaption class="blockquote-footer">
                                            Someone famous in <cite title="Source Title">Source Title</cite>
                                        </figcaption>
                                    </figure>
                                    <ul>
                                        <li>Course Feature One</li>
                                        <li>Course Feature Two</li>
                                        <li>Course Feature Three</li>
                                        <li>Course Feature Four</li>
                                        <li>Course Feature Five</li>
                                    </ul>
                                    <p class="card-text"><small class="text-muted">Last update 3min ago</small></p>
                                    <a href="" class="btn btn-success">Read More</a>
                                    <a href="" class="btn btn-success float-end">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{asset('/img/1.jpg')}}/" class="img-fluid rounded-start w-100 h-100" alt="" >
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <figure>
                                        <blockquote class="blockquote">
                                            <p>A well-known quote, contained in a blockquote element.</p>
                                        </blockquote>
                                        <figcaption class="blockquote-footer">
                                            Someone famous in <cite title="Source Title">Source Title</cite>
                                        </figcaption>
                                    </figure>
                                    <ul>
                                        <li>Course Feature One</li>
                                        <li>Course Feature Two</li>
                                        <li>Course Feature Three</li>
                                        <li>Course Feature Four</li>
                                        <li>Course Feature Five</li>
                                    </ul>
                                    <p class="card-text"><small class="text-muted">Last update 3min ago</small></p>
                                    <a href="" class="btn btn-success">Read More</a>
                                    <a href="" class="btn btn-success float-end">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{asset('/img/1.jpg')}}/" class="img-fluid rounded-start w-100 h-100" alt="" >
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <figure>
                                        <blockquote class="blockquote">
                                            <p>A well-known quote, contained in a blockquote element.</p>
                                        </blockquote>
                                        <figcaption class="blockquote-footer">
                                            Someone famous in <cite title="Source Title">Source Title</cite>
                                        </figcaption>
                                    </figure>
                                    <ul>
                                        <li>Course Feature One</li>
                                        <li>Course Feature Two</li>
                                        <li>Course Feature Three</li>
                                        <li>Course Feature Four</li>
                                        <li>Course Feature Five</li>
                                    </ul>
                                    <p class="card-text"><small class="text-muted">Last update 3min ago</small></p>
                                    <a href="" class="btn btn-success">Read More</a>
                                    <a href="" class="btn btn-success float-end">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-body bg-light">
                        <div class="row ">
                            <div class="col-md-9 ">
                                <input type="text" class="form-control" placeholder="Enter Your Email"/>
                            </div>
                            <div class="col-md-3 ">
                                <input type="submit" class="btn btn-outline-success w-100 bg-dark" value="Subscribe Now">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection


