<section class="courses section grid-page">
    <div class="container">
        <div class="row">
            <aside class="col-lg-4 col-md-12 col-12">
                <div class="sidebar">
                    <!-- Single Widget -->
                    <div class="widget">
                        <h5 class="widget-title">Filter</h5>
                        <form id="filterform"   method="get" action="http://traineasyv3.intermaticsng.com/sessions">

                            <input type="hidden" name="group" value=""/>

                            <div class="form-group mb-3">
                                <label  for="filter">Search</label>
                                <input type="text" name="filter" class="form-control" placeholder="Search">
                            </div>
                            <div  class="form-group mb-3">
                                <label  for="group">Sort</label>
                                <div><select type="select" name="sort" class="form-control"><option selected="selected" value="">--Sort--</option><option value="recent">Recently Added</option><option value="asc">Alphabetical (Ascending)</option><option value="desc">Alphabetical (Descending)</option><option value="date">Start Date</option><option value="priceAsc">Price (Lowest to Highest)</option><option value="priceDesc">Price (Highest to Lowest)</option></select></div>
                            </div>

                            <div   >
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Filter</button>
                                <button type="button" onclick="$('#filterform input, #filterform select').val(''); $('#filterform').submit();" class="btn btn-secondary">Clear</button>

                            </div>

                        </form>
                    </div>
                    <!--/ End Single Widget -->

                </div>
            </aside>
            <div class="col-md-8">

                <div class="row">

                    <div class="col-lg-6 col-md-6 col-12">
                        <!-- Start Single Course -->
                        <div class="single-course wow fadeInUp" data-wow-delay=".2s">

                            <div class="course-image">
                                <a href="courses/6/microsoft-office-training.html">
                                    <img src="usermedia/office-550x340.jpg" alt="Microsoft office training">
                                </a>
                                <p class="price">$3,000.00</p>
                            </div>
                            <div class="content">
                                <h3><a href="courses/6/microsoft-office-training.html">Microsoft office training</a></h3>
                                <p>Training program for MS Office</p>
                            </div>
                            <div class="bottom-content">
                                <ul class="review">
                                    <li>$3,000.00</li>
                                </ul>

                                <span class="tag">

                                    <a href="#">Starts: 21 Apr, 2023</a>
                                </span>

                            </div>

                        </div>
                        <!-- End Single Course -->
                    </div>

                </div>
                <div class="row">
                    <div class="col-12">


                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
