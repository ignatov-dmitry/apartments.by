@extends('layouts.home')

@section('content')
    <!--
<section class="find_section layout_padding">
    <div class="container">
          <div class="heading_container">
              <h2>
                  Find Your <br />
                  Perfect Home
              </h2>
          </div>
          <div class="form_tab_container">
              <div class="nav-tabs-navigation">
                  <div class="nav-tabs-wrapper">
                      <ul class="nav " data-tabs="tabs">
                          <li class="nav-item">
                              <a class="nav-link active" href="#rent" data-toggle="tab">For Rent</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="#buy" data-toggle="tab">For Buy</a>
                          </li>
                      </ul>
                  </div>
              </div>
              <div class="tab-content text-center">
                  <div class="tab-pane active" id="rent">
                      <div class="Rent_form find_form">
                          <form action="#">
                              <div class="form-row">
                                  <div class="col-md-6 px-0">
                                      <div class="form-group ">
                                          <div class="input-group ">
                                              <div class="input-group-prepend">
                                                  <div class="input-group-text">
                                                      <img src="/public/assets/images/input-location.png" alt="Location Image" />
                                                  </div>
                                              </div>
                                              <input type="text" class="form-control" id="inputRentDestination" placeholder="Enter your Landmark Location" />
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-6 px-0">
                                      <div class="form-group ">
                                          <div class="input-group ">
                                              <div class="input-group-prepend">
                                                  <div class="input-group-text">
                                                      <img src="/public/assets/images/input-property.png" alt="Property Image" />
                                                  </div>
                                              </div>
                                              <input type="text" class="form-control" id="inputRentPropery" placeholder="All Properties" />
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="form-row">
                                  <div class="col-md-6 px-0">
                                      <div class="form-group">
                                          <div class="input-group ">
                                              <div class="input-group-prepend">
                                                  <div class="input-group-text">
                                                      <img src="/public/assets/images/input-room.png" alt="Room Image" />
                                                  </div>
                                              </div>
                                              <select class="form-control" id="inputRentRoom">
                                                  <option data-display="Room">Room</option>
                                                  <option value="1">1 </option>
                                                  <option value="2">2 </option>
                                                  <option value="3">3 </option>
                                              </select>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-6 px-0">
                                      <div class="form-group">
                                          <div class="input-group ">
                                              <div class="input-group-prepend">
                                                  <div class="input-group-text">
                                                      <img src="/public/assets/images/input-price.png" alt="Money Image" />
                                                  </div>
                                              </div>
                                              <input type="text" class="form-control" id="inputRentPrice" placeholder="Price" />
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="btn-box">
                                  <button type="submit" class="">
                        <span>
                          find Now
                        </span>
                                  </button>
                              </div>
                          </form>
                      </div>
                  </div>
                  <div class="tab-pane" id="buy">
                      <div class="Buy_form find_form">
                          <form action="#">
                              <div class="form-row">
                                  <div class="col-md-6 px-0">
                                      <div class="form-group ">
                                          <div class="input-group ">
                                              <div class="input-group-prepend">
                                                  <div class="input-group-text">
                                                      <img src="/public/assets/images/input-location.png" alt="Location Image" />
                                                  </div>
                                              </div>
                                              <input type="text" class="form-control" id="inputBuyDestination" placeholder="Enter your Landmark Location" />
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-6 px-0">
                                      <div class="form-group ">
                                          <div class="input-group ">
                                              <div class="input-group-prepend">
                                                  <div class="input-group-text">
                                                      <img src="/public/assets/images/input-property.png" alt="Property Image" />
                                                  </div>
                                              </div>
                                              <input type="text" class="form-control" id="inputBuyPropery" placeholder="All Properties" />
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="form-row">
                                  <div class="col-md-6 px-0">
                                      <div class="form-group">
                                          <div class="input-group ">
                                              <div class="input-group-prepend">
                                                  <div class="input-group-text">
                                                      <img src="/public/assets/images/input-room.png" alt="Room Image" />
                                                  </div>
                                              </div>
                                              <select class=" form-control" id="inputBuyBhk">
                                                  <option data-display="BHK ">BHK</option>
                                                  <option value="1">1 </option>
                                                  <option value="2">2 </option>
                                                  <option value="3">3 </option>
                                              </select>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-6 px-0">
                                      <div class="form-group">
                                          <div class="input-group ">
                                              <div class="input-group-prepend">
                                                  <div class="input-group-text">
                                                      <img src="/public/assets/images/input-price.png" alt="Money Image" />
                                                  </div>
                                              </div>
                                              <input type="text" class="form-control" id="inputBudget" placeholder="Budget" />
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="btn-box">
                                  <button type="submit" class="">
                        <span>
                          find Now
                        </span>
                                  </button>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
</section>-->

<!-- find section ends -->

<!-- property section starts-->
<!--
<section class="property_section layout_padding pr_mobile_20">
    <div class="section_bg section_bg_left"></div>
    <div class="container-fluid max_width-1500">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="heading_container">
                    <h2>
                        Properties
                    </h2>
                    <p>
                        There are many variations of passages of Lorem Ipsum available,
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="box">
                            <div class="number_box">
                                <h5>
                                    01
                                </h5>
                            </div>
                            <div class="img-box">
                                <img src="/public/assets/images/p-1.png" alt="Property Image" />
                            </div>
                            <div class="detail-box">
                                <h6>
                                    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 323.25 475.54">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    isolation: isolate;
                                                }
                                            </style>
                                        </defs>
                                        <title>location</title>
                                        <g class="cls-1">
                                            <path class="" d="M397.29,537.57q-17.4-22.82-29.89-41.29-54.88-77.16-89.12-148.35Q267.4,325.1,261.44,308.8a265.19,265.19,0,0,1-12-40.75Q233.72,188.18,287,128.4q50.53-57.6,129.87-54.34a147.84,147.84,0,0,1,66.84,18.2,164.16,164.16,0,0,1,53.25,45.92,155.85,155.85,0,0,1,28.8,63.57,166.86,166.86,0,0,1-4.89,85.32q-23.37,73.35-77.7,156.5Q467.37,468,433.7,515.29l-22.83,32.07a12.16,12.16,0,0,0-1.63,1.9c-.36.54-1.72-.27-4.07-2.45A62.64,62.64,0,0,1,397.29,537.57Zm89.66-300a77,77,0,0,0-9-38.31,81.36,81.36,0,0,0-26.62-29.89,72,72,0,0,0-37.23-12.77A84.73,84.73,0,0,0,372,165.07a75,75,0,0,0-30.7,27.45q-11.42,17.92-12.5,41.29a69.89,69.89,0,0,0,9,38.31A84.82,84.82,0,0,0,365.23,302a69.32,69.32,0,0,0,37.49,12.23,81.72,81.72,0,0,0,41.3-8.43,75.29,75.29,0,0,0,30.43-27.44Q485.87,260.45,487,237.62Z" transform="translate(-245.88 -73.88)" />
                                        </g>
                                    </svg>
                                    <span>
                        Location
                      </span>
                                </h6>
                                <a href="property_detail.html">
                      <span>
                        Detail
                      </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="box">
                            <div class="number_box">
                                <h5>
                                    02
                                </h5>
                            </div>
                            <div class="img-box">
                                <img src="/public/assets/images/p-2.png" alt="Property Image" />
                            </div>
                            <div class="detail-box">
                                <h6>
                                    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 323.25 475.54">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    isolation: isolate;
                                                }
                                            </style>
                                        </defs>
                                        <title>location</title>
                                        <g class="cls-1">
                                            <path class="" d="M397.29,537.57q-17.4-22.82-29.89-41.29-54.88-77.16-89.12-148.35Q267.4,325.1,261.44,308.8a265.19,265.19,0,0,1-12-40.75Q233.72,188.18,287,128.4q50.53-57.6,129.87-54.34a147.84,147.84,0,0,1,66.84,18.2,164.16,164.16,0,0,1,53.25,45.92,155.85,155.85,0,0,1,28.8,63.57,166.86,166.86,0,0,1-4.89,85.32q-23.37,73.35-77.7,156.5Q467.37,468,433.7,515.29l-22.83,32.07a12.16,12.16,0,0,0-1.63,1.9c-.36.54-1.72-.27-4.07-2.45A62.64,62.64,0,0,1,397.29,537.57Zm89.66-300a77,77,0,0,0-9-38.31,81.36,81.36,0,0,0-26.62-29.89,72,72,0,0,0-37.23-12.77A84.73,84.73,0,0,0,372,165.07a75,75,0,0,0-30.7,27.45q-11.42,17.92-12.5,41.29a69.89,69.89,0,0,0,9,38.31A84.82,84.82,0,0,0,365.23,302a69.32,69.32,0,0,0,37.49,12.23,81.72,81.72,0,0,0,41.3-8.43,75.29,75.29,0,0,0,30.43-27.44Q485.87,260.45,487,237.62Z" transform="translate(-245.88 -73.88)" />
                                        </g>
                                    </svg>
                                    <span>
                        Location
                      </span>
                                </h6>
                                <a href="property_detail.html">
                      <span>
                        Detail
                      </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="box">
                            <div class="number_box">
                                <h5>
                                    03
                                </h5>
                            </div>
                            <div class="img-box">
                                <img src="/public/assets/images/p-3.png" alt="Property Image" />
                            </div>
                            <div class="detail-box">
                                <h6>
                                    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 323.25 475.54">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    isolation: isolate;
                                                }
                                            </style>
                                        </defs>
                                        <title>location</title>
                                        <g class="cls-1">
                                            <path class="" d="M397.29,537.57q-17.4-22.82-29.89-41.29-54.88-77.16-89.12-148.35Q267.4,325.1,261.44,308.8a265.19,265.19,0,0,1-12-40.75Q233.72,188.18,287,128.4q50.53-57.6,129.87-54.34a147.84,147.84,0,0,1,66.84,18.2,164.16,164.16,0,0,1,53.25,45.92,155.85,155.85,0,0,1,28.8,63.57,166.86,166.86,0,0,1-4.89,85.32q-23.37,73.35-77.7,156.5Q467.37,468,433.7,515.29l-22.83,32.07a12.16,12.16,0,0,0-1.63,1.9c-.36.54-1.72-.27-4.07-2.45A62.64,62.64,0,0,1,397.29,537.57Zm89.66-300a77,77,0,0,0-9-38.31,81.36,81.36,0,0,0-26.62-29.89,72,72,0,0,0-37.23-12.77A84.73,84.73,0,0,0,372,165.07a75,75,0,0,0-30.7,27.45q-11.42,17.92-12.5,41.29a69.89,69.89,0,0,0,9,38.31A84.82,84.82,0,0,0,365.23,302a69.32,69.32,0,0,0,37.49,12.23,81.72,81.72,0,0,0,41.3-8.43,75.29,75.29,0,0,0,30.43-27.44Q485.87,260.45,487,237.62Z" transform="translate(-245.88 -73.88)" />
                                        </g>
                                    </svg>
                                    <span>
                        Location
                      </span>
                                </h6>
                                <a href="property_detail.html">
                      <span>
                        Detail
                      </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="box">
                            <div class="number_box">
                                <h5>
                                    04
                                </h5>
                            </div>
                            <div class="img-box">
                                <img src="/public/assets/images/p-4.png" alt="Property Image" />
                            </div>
                            <div class="detail-box">
                                <h6>
                                    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 323.25 475.54">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    isolation: isolate;
                                                }
                                            </style>
                                        </defs>
                                        <title>location</title>
                                        <g class="cls-1">
                                            <path class="" d="M397.29,537.57q-17.4-22.82-29.89-41.29-54.88-77.16-89.12-148.35Q267.4,325.1,261.44,308.8a265.19,265.19,0,0,1-12-40.75Q233.72,188.18,287,128.4q50.53-57.6,129.87-54.34a147.84,147.84,0,0,1,66.84,18.2,164.16,164.16,0,0,1,53.25,45.92,155.85,155.85,0,0,1,28.8,63.57,166.86,166.86,0,0,1-4.89,85.32q-23.37,73.35-77.7,156.5Q467.37,468,433.7,515.29l-22.83,32.07a12.16,12.16,0,0,0-1.63,1.9c-.36.54-1.72-.27-4.07-2.45A62.64,62.64,0,0,1,397.29,537.57Zm89.66-300a77,77,0,0,0-9-38.31,81.36,81.36,0,0,0-26.62-29.89,72,72,0,0,0-37.23-12.77A84.73,84.73,0,0,0,372,165.07a75,75,0,0,0-30.7,27.45q-11.42,17.92-12.5,41.29a69.89,69.89,0,0,0,9,38.31A84.82,84.82,0,0,0,365.23,302a69.32,69.32,0,0,0,37.49,12.23,81.72,81.72,0,0,0,41.3-8.43,75.29,75.29,0,0,0,30.43-27.44Q485.87,260.45,487,237.62Z" transform="translate(-245.88 -73.88)" />
                                        </g>
                                    </svg>
                                    <span>
                        Location
                      </span>
                                </h6>
                                <a href="property_detail.html">
                      <span>
                        Detail
                      </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="box">
                            <div class="number_box">
                                <h5>
                                    05
                                </h5>
                            </div>
                            <div class="img-box">
                                <img src="/public/assets/images/p-5.png" alt="Property Image" />
                            </div>
                            <div class="detail-box">
                                <h6>
                                    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 323.25 475.54">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    isolation: isolate;
                                                }
                                            </style>
                                        </defs>
                                        <title>location</title>
                                        <g class="cls-1">
                                            <path class="" d="M397.29,537.57q-17.4-22.82-29.89-41.29-54.88-77.16-89.12-148.35Q267.4,325.1,261.44,308.8a265.19,265.19,0,0,1-12-40.75Q233.72,188.18,287,128.4q50.53-57.6,129.87-54.34a147.84,147.84,0,0,1,66.84,18.2,164.16,164.16,0,0,1,53.25,45.92,155.85,155.85,0,0,1,28.8,63.57,166.86,166.86,0,0,1-4.89,85.32q-23.37,73.35-77.7,156.5Q467.37,468,433.7,515.29l-22.83,32.07a12.16,12.16,0,0,0-1.63,1.9c-.36.54-1.72-.27-4.07-2.45A62.64,62.64,0,0,1,397.29,537.57Zm89.66-300a77,77,0,0,0-9-38.31,81.36,81.36,0,0,0-26.62-29.89,72,72,0,0,0-37.23-12.77A84.73,84.73,0,0,0,372,165.07a75,75,0,0,0-30.7,27.45q-11.42,17.92-12.5,41.29a69.89,69.89,0,0,0,9,38.31A84.82,84.82,0,0,0,365.23,302a69.32,69.32,0,0,0,37.49,12.23,81.72,81.72,0,0,0,41.3-8.43,75.29,75.29,0,0,0,30.43-27.44Q485.87,260.45,487,237.62Z" transform="translate(-245.88 -73.88)" />
                                        </g>
                                    </svg>
                                    <span>
                        Location
                      </span>
                                </h6>
                                <a href="property_detail.html">
                      <span>
                        Detail
                      </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="box">
                            <div class="number_box">
                                <h5>
                                    06
                                </h5>
                            </div>
                            <div class="img-box">
                                <img src="/public/assets/images/p-6.png" alt="Property Image" />
                            </div>
                            <div class="detail-box">
                                <h6>
                                    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 323.25 475.54">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    isolation: isolate;
                                                }
                                            </style>
                                        </defs>
                                        <title>location</title>
                                        <g class="cls-1">
                                            <path class="" d="M397.29,537.57q-17.4-22.82-29.89-41.29-54.88-77.16-89.12-148.35Q267.4,325.1,261.44,308.8a265.19,265.19,0,0,1-12-40.75Q233.72,188.18,287,128.4q50.53-57.6,129.87-54.34a147.84,147.84,0,0,1,66.84,18.2,164.16,164.16,0,0,1,53.25,45.92,155.85,155.85,0,0,1,28.8,63.57,166.86,166.86,0,0,1-4.89,85.32q-23.37,73.35-77.7,156.5Q467.37,468,433.7,515.29l-22.83,32.07a12.16,12.16,0,0,0-1.63,1.9c-.36.54-1.72-.27-4.07-2.45A62.64,62.64,0,0,1,397.29,537.57Zm89.66-300a77,77,0,0,0-9-38.31,81.36,81.36,0,0,0-26.62-29.89,72,72,0,0,0-37.23-12.77A84.73,84.73,0,0,0,372,165.07a75,75,0,0,0-30.7,27.45q-11.42,17.92-12.5,41.29a69.89,69.89,0,0,0,9,38.31A84.82,84.82,0,0,0,365.23,302a69.32,69.32,0,0,0,37.49,12.23,81.72,81.72,0,0,0,41.3-8.43,75.29,75.29,0,0,0,30.43-27.44Q485.87,260.45,487,237.62Z" transform="translate(-245.88 -73.88)" />
                                        </g>
                                    </svg>
                                    <span>
                        Location
                      </span>
                                </h6>
                                <a href="property_detail.html">
                      <span>
                        Detail
                      </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-box">
                    <a href="property.html">
                <span>
                  See More
                </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- property section ends -->

<!-- about section starts -->

<section class="about_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="detail-box mb_md_75">
                    <h2>
                        ?? ??????????
                        ??????????????
                    </h2>
                    <p>
                        ???? ???????????????? ?????????? ?????????????? ?????????? ???????????????????? ?????????????? ?????? ?????????? ?????? ???????????? ??????????????. ???? ???? ???????????????????? ???????????????????????? ????????????????
                        ?????? ???????????? ???????????????? ?????????????????????????????? ?? ?????????????????????? ?? ??????????????????.
                    </p>
                    <a href="about.html">
                <span>
                  ???????????? ??????????????????
                </span>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="img-box">
                    <img src="/public/assets/images/about-img.png" alt="About Image" />
                </div>
            </div>
        </div>
    </div>
</section>

<!-- about section ends -->

<!-- contact section starts-->
<!--
<section class="contact_section layout_padding pl_mobile_20">
    <div class="section_bg section_bg_right"></div>
    <div class="container-fluid ">
        <div class="row">
            <div class="col-md-5  offset-md-1">
                <div class="form_container mb_md_75">
                    <div class="heading_container">
                        <h2>
                            Request A Call back
                        </h2>
                    </div>
                    <form action="#">
                        <div>
                            <input type="text" id="contactName" name="your_name" placeholder="Your name" />
                        </div>
                        <div>
                            <input type="text" id="contactNumber" name="phone_number" placeholder="Phone number" />
                        </div>
                        <div>
                            <input type="email" id="contactEmail" name="email_address" placeholder="Email" />
                        </div>
                        <div>
                            <input type="text" id="contactMessage" name="your_message" placeholder="Message" />
                        </div>
                        <div class="btn-box">
                            <button>
                    <span>
                      SEND
                    </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6  px-0">
                <div class="map_container">
                    <div class="map">
                        <div id="googleMap"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- contact section ends -->

<!-- client section starts -->

<section class="client_section layout_padding">
    <div class="container">
        <div class="heading_container">
            <h2>
                ???????????? ?? ?????????? ????????????
            </h2>
        </div>
        <div class="carousel-wrap ">
            <div class="client_owl-carousel owl-carousel">
                <div class="item">
                    <div class="box">
                        <div class="img_container">
                            <div class="img-box">
                                <img src="/public/assets/images/client-1.jpg" alt="client Image" />
                            </div>
                            <div class="svg_box">
                                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 443.54 373.34">
                                    <defs>
                                        <style>
                                            .cls-1 {
                                                isolation: isolate;
                                            }

                                            .cls-2 {
                                                fill: #f83319;
                                            }
                                        </style>
                                    </defs>
                                    <title>quotes</title>
                                    <g class="cls-1">
                                        <path class="cls-2" d="M384.9,527.64H249.56a33.18,33.18,0,0,1-24.33-10.13,33.74,33.74,0,0,1-10.14-24.84V370q0-87.69,36-137.88,29.89-40.55,92.76-74,12.66-6.59,26.87-1.77t20.78,17.48l12.17,22.31a33.45,33.45,0,0,1,2.28,26.36,35.22,35.22,0,0,1-17,20.78Q358.54,261,344.85,277.74a95,95,0,0,0-16.22,27.88q-5.07,12.17,4.06,21.8t23.82,9.63H384.9a34.63,34.63,0,0,1,35,35V492.67a34,34,0,0,1-10.14,24.58A33.41,33.41,0,0,1,384.9,527.64Zm238.75,0H488.31a35.49,35.49,0,0,1-35-35V370q0-87.18,36.5-137.88,29.91-40.55,92.76-74,12.67-6.59,26.87-1.77t20.78,17.48l11.66,22.31a32.81,32.81,0,0,1,2.28,26.1,37.7,37.7,0,0,1-16.47,21q-29.93,17.23-44.1,34.47a94.55,94.55,0,0,0-16.22,27.88q-5.08,12.17,4.05,21.8t23.83,9.63h28.38a34.63,34.63,0,0,1,35,35V492.67a34,34,0,0,1-10.14,24.58A33.39,33.39,0,0,1,623.65,527.64Z" transform="translate(-215.09 -154.31)" />
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="detail-box">
                            <div class="client_name">
                                <h6>
                                    Lohila
                                </h6>
                                <p>
                                    Home Renter
                                </p>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="box">
                        <div class="img_container">
                            <div class="img-box">
                                <img src="/public/assets/images/client-2.jpg" alt="client Image" />
                            </div>
                            <div class="svg_box">
                                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 443.54 373.34">
                                    <defs>
                                        <style>
                                            .cls-1 {
                                                isolation: isolate;
                                            }

                                            .cls-2 {
                                                fill: #f83319;
                                            }
                                        </style>
                                    </defs>
                                    <title>quotes</title>
                                    <g class="cls-1">
                                        <path class="cls-2" d="M384.9,527.64H249.56a33.18,33.18,0,0,1-24.33-10.13,33.74,33.74,0,0,1-10.14-24.84V370q0-87.69,36-137.88,29.89-40.55,92.76-74,12.66-6.59,26.87-1.77t20.78,17.48l12.17,22.31a33.45,33.45,0,0,1,2.28,26.36,35.22,35.22,0,0,1-17,20.78Q358.54,261,344.85,277.74a95,95,0,0,0-16.22,27.88q-5.07,12.17,4.06,21.8t23.82,9.63H384.9a34.63,34.63,0,0,1,35,35V492.67a34,34,0,0,1-10.14,24.58A33.41,33.41,0,0,1,384.9,527.64Zm238.75,0H488.31a35.49,35.49,0,0,1-35-35V370q0-87.18,36.5-137.88,29.91-40.55,92.76-74,12.67-6.59,26.87-1.77t20.78,17.48l11.66,22.31a32.81,32.81,0,0,1,2.28,26.1,37.7,37.7,0,0,1-16.47,21q-29.93,17.23-44.1,34.47a94.55,94.55,0,0,0-16.22,27.88q-5.08,12.17,4.05,21.8t23.83,9.63h28.38a34.63,34.63,0,0,1,35,35V492.67a34,34,0,0,1-10.14,24.58A33.39,33.39,0,0,1,623.65,527.64Z" transform="translate(-215.09 -154.31)" />
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="detail-box">
                            <div class="client_name">
                                <h6>
                                    Marke
                                </h6>
                                <p>
                                    Home Renter
                                </p>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="box">
                        <div class="img_container">
                            <div class="img-box">
                                <img src="/public/assets/images/client-1.jpg" alt="client Image" />
                            </div>
                            <div class="svg_box">
                                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 443.54 373.34">
                                    <defs>
                                        <style>
                                            .cls-1 {
                                                isolation: isolate;
                                            }

                                            .cls-2 {
                                                fill: #f83319;
                                            }
                                        </style>
                                    </defs>
                                    <title>quotes</title>
                                    <g class="cls-1">
                                        <path class="cls-2" d="M384.9,527.64H249.56a33.18,33.18,0,0,1-24.33-10.13,33.74,33.74,0,0,1-10.14-24.84V370q0-87.69,36-137.88,29.89-40.55,92.76-74,12.66-6.59,26.87-1.77t20.78,17.48l12.17,22.31a33.45,33.45,0,0,1,2.28,26.36,35.22,35.22,0,0,1-17,20.78Q358.54,261,344.85,277.74a95,95,0,0,0-16.22,27.88q-5.07,12.17,4.06,21.8t23.82,9.63H384.9a34.63,34.63,0,0,1,35,35V492.67a34,34,0,0,1-10.14,24.58A33.41,33.41,0,0,1,384.9,527.64Zm238.75,0H488.31a35.49,35.49,0,0,1-35-35V370q0-87.18,36.5-137.88,29.91-40.55,92.76-74,12.67-6.59,26.87-1.77t20.78,17.48l11.66,22.31a32.81,32.81,0,0,1,2.28,26.1,37.7,37.7,0,0,1-16.47,21q-29.93,17.23-44.1,34.47a94.55,94.55,0,0,0-16.22,27.88q-5.08,12.17,4.05,21.8t23.83,9.63h28.38a34.63,34.63,0,0,1,35,35V492.67a34,34,0,0,1-10.14,24.58A33.39,33.39,0,0,1,623.65,527.64Z" transform="translate(-215.09 -154.31)" />
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="detail-box">
                            <div class="client_name">
                                <h6>
                                    Lohila
                                </h6>
                                <p>
                                    Home Renter
                                </p>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="box">
                        <div class="img_container">
                            <div class="img-box">
                                <img src="/public/assets/images/client-2.jpg" alt="client Image" />
                            </div>
                            <div class="svg_box">
                                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 443.54 373.34">
                                    <defs>
                                        <style>
                                            .cls-1 {
                                                isolation: isolate;
                                            }

                                            .cls-2 {
                                                fill: #f83319;
                                            }
                                        </style>
                                    </defs>
                                    <title>quotes</title>
                                    <g class="cls-1">
                                        <path class="cls-2" d="M384.9,527.64H249.56a33.18,33.18,0,0,1-24.33-10.13,33.74,33.74,0,0,1-10.14-24.84V370q0-87.69,36-137.88,29.89-40.55,92.76-74,12.66-6.59,26.87-1.77t20.78,17.48l12.17,22.31a33.45,33.45,0,0,1,2.28,26.36,35.22,35.22,0,0,1-17,20.78Q358.54,261,344.85,277.74a95,95,0,0,0-16.22,27.88q-5.07,12.17,4.06,21.8t23.82,9.63H384.9a34.63,34.63,0,0,1,35,35V492.67a34,34,0,0,1-10.14,24.58A33.41,33.41,0,0,1,384.9,527.64Zm238.75,0H488.31a35.49,35.49,0,0,1-35-35V370q0-87.18,36.5-137.88,29.91-40.55,92.76-74,12.67-6.59,26.87-1.77t20.78,17.48l11.66,22.31a32.81,32.81,0,0,1,2.28,26.1,37.7,37.7,0,0,1-16.47,21q-29.93,17.23-44.1,34.47a94.55,94.55,0,0,0-16.22,27.88q-5.08,12.17,4.05,21.8t23.83,9.63h28.38a34.63,34.63,0,0,1,35,35V492.67a34,34,0,0,1-10.14,24.58A33.39,33.39,0,0,1,623.65,527.64Z" transform="translate(-215.09 -154.31)" />
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="detail-box">
                            <div class="client_name">
                                <h6>
                                    Marke
                                </h6>
                                <p>
                                    Home Renter
                                </p>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- client section ends -->

<!-- info section starts -->

<section class="info_section layout_padding pr_mobile_20">
    <div class="section_bg section_bg_left"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="info_top">
                    <div class="address_box">
                        <h3>
                            ??????????
                        </h3>
                        <a href="#">
                            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 323.25 475.54">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            isolation: isolate;
                                        }
                                    </style>
                                </defs>
                                <title>??. ??????????, ????. ???????????? 5</title>
                                <g class="cls-1">
                                    <path class="" d="M397.29,537.57q-17.4-22.82-29.89-41.29-54.88-77.16-89.12-148.35Q267.4,325.1,261.44,308.8a265.19,265.19,0,0,1-12-40.75Q233.72,188.18,287,128.4q50.53-57.6,129.87-54.34a147.84,147.84,0,0,1,66.84,18.2,164.16,164.16,0,0,1,53.25,45.92,155.85,155.85,0,0,1,28.8,63.57,166.86,166.86,0,0,1-4.89,85.32q-23.37,73.35-77.7,156.5Q467.37,468,433.7,515.29l-22.83,32.07a12.16,12.16,0,0,0-1.63,1.9c-.36.54-1.72-.27-4.07-2.45A62.64,62.64,0,0,1,397.29,537.57Zm89.66-300a77,77,0,0,0-9-38.31,81.36,81.36,0,0,0-26.62-29.89,72,72,0,0,0-37.23-12.77A84.73,84.73,0,0,0,372,165.07a75,75,0,0,0-30.7,27.45q-11.42,17.92-12.5,41.29a69.89,69.89,0,0,0,9,38.31A84.82,84.82,0,0,0,365.23,302a69.32,69.32,0,0,0,37.49,12.23,81.72,81.72,0,0,0,41.3-8.43,75.29,75.29,0,0,0,30.43-27.44Q485.87,260.45,487,237.62Z" transform="translate(-245.88 -73.88)" />
                                </g>
                            </svg>
                            <span>
                    ??. ??????????, ????. ???????????? 5
                  </span>
                        </a>
                        <a href="tel:011234567890">
                            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 344.5 492.15">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            isolation: isolate;
                                        }
                                    </style>
                                </defs>
                                <title>call</title>
                                <g class="cls-1">
                                    <path class="" d="M429.36,568q-13.31.48-31.54-9.37a202.64,202.64,0,0,1-30.07-21.19q-30.57-26.13-58.16-65.06-20.22-28.57-45.35-74.43-28.1-49.77-45.84-89.21-22.67-49.27-34.5-94.14-5.91-24.15-7.39-41.9A132.88,132.88,0,0,1,180,130.77q9.36-35,41.4-40.91,12.31-2,37.46-7.4,18.72-4.42,28.1-5.91,10.83-2,17.49,1.48T315,91.34q24.15,58.16,41.4,103,3.94,10.35,1.73,17.5t-11.09,13.06L336.2,232.3q-14.77,9.38-21.68,14.79a19.17,19.17,0,0,0-4.93,6.65q-2,4.2-1.48,7.15,16.75,67,63.09,120.76,6.9,8.39,16.27,3.45,7.88-3.94,24.64-10.35l10.35-4.44q10.83-3.93,18.24-2t13.8,11.34q40.41,60.13,60.13,90.2,6.9,10.85,5.91,18.72t-10.35,17.26l-4.92,4.93Q493.92,521.62,483.58,530,466.81,542.82,429.36,568Z" transform="translate(-176.17 -75.84)" />
                                </g>
                            </svg>
                            <span>
                    +375 (33) 33-33-333
                  </span>
                        </a>
                        <a href="mailto:info@yourdomain.com">
                            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 414.98 281.92">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            isolation: isolate;
                                        }
                                    </style>
                                </defs>
                                <title>mail</title>
                                <g class="cls-1">
                                    <path
                                            class=""
                                            d="M198.29,240.35V224.69q0-19,19-19h375.9q19.94,0,19.46,19.46l.47,6.16q.46,9.51-1.19,13.53t-9.25,10.21l-3.8,3.32-186.52,187c-2.85,2.53-5.15,3.88-6.88,4s-4-1.19-6.89-4Q354.91,401.25,267.1,313.92l-66-66Q197.82,243.68,198.29,240.35Zm0,35.12Q252.4,329.58,279,357.11l-80.68,80.68ZM608.83,463.9q3.79,3.8,4,6.64c.16,1.9-.4,4.44-1.66,7.6q-3.8,8.07-13.76,9.49H216.8q-15.2,0-18-12.82-1.42-5.69,1.9-9l93-93a16.09,16.09,0,0,1,2.38-1.9,28.39,28.39,0,0,0,3.32,4.27l85.43,85.43q9.49,9.51,20.65,9.5t21.12-10L512,374.67a28,28,0,0,0,2.84-3.8l2.85,2.38,1.43,1.42Q578.92,434.48,608.83,463.9ZM350.16,311.07a50.19,50.19,0,0,0,6.17,22.31,39.9,39.9,0,0,0,12.58,14.47,51.65,51.65,0,0,0,17.8,7.83,55,55,0,0,0,20.41.95,56.3,56.3,0,0,0,8.54-.95c3.8-.63,6.56-1.18,8.3-1.66a71.08,71.08,0,0,0,7.36-2.61,24.12,24.12,0,0,0,5.7-2.84c-.32-.95-.8-2.38-1.43-4.28l-3.79-8.06a37.82,37.82,0,0,1-10.92,4.27,109.2,109.2,0,0,1-13.29,1.9,45.05,45.05,0,0,1-14.71-.48,31.32,31.32,0,0,1-12.34-5.69q-4.76-2.85-9-10.92a39.25,39.25,0,0,1-4.75-16.14,57.17,57.17,0,0,1,11.4-40.34,49.53,49.53,0,0,1,16.13-14.24A78.15,78.15,0,0,1,418,248q17.57-1.42,28,5.69,10.43,8.08,11.86,23.26a34.58,34.58,0,0,1-.24,12.1,61.18,61.18,0,0,1-3.08,10.68,20.85,20.85,0,0,1-5.7,8.07,18.36,18.36,0,0,1-9,4.27c-2.54,0-4.12-.16-4.75-.48l4.27-47.46A42.74,42.74,0,0,0,428,262.19a32.62,32.62,0,0,0-8.07,0h-4.27A53.21,53.21,0,0,0,401,266.93a53,53,0,0,0-11.39,10,46.32,46.32,0,0,0-7.36,14.24,42.6,42.6,0,0,0-1.66,17.56,40.86,40.86,0,0,0,2.85,10,27.09,27.09,0,0,0,5.22,6.65,24.63,24.63,0,0,0,7.12,3.56,17.15,17.15,0,0,0,8.54.24,53.32,53.32,0,0,0,11.39-2.38,49.93,49.93,0,0,0,8.07-4.74q5.7,5.22,15.42,4a35,35,0,0,0,16.61-6.17,36.93,36.93,0,0,0,10.68-11.63,52,52,0,0,0,6.65-15.66,82.14,82.14,0,0,0,1-17.09q-1.43-12.33-6.17-20.4a46.83,46.83,0,0,0-12.58-13.77,41.72,41.72,0,0,0-17.09-6.41,94.28,94.28,0,0,0-19.69-1.18q-19,1.9-33.23,10a73.72,73.72,0,0,0-21.83,18.51,80,80,0,0,0-11.39,24.2Q348.73,300.63,350.16,311.07Zm71.19-33.7L418.51,312c-1.9,1.27-3.33,1.9-4.27,1.9l-4.75.47a9,9,0,0,1-6.88-1.9q-3.09-2.36-4-8.54a33.45,33.45,0,0,1,.48-9.49,25.1,25.1,0,0,1,2.61-7.59,16.11,16.11,0,0,1,5.93-6.65,18.77,18.77,0,0,1,7.59-2.85Zm110.59,78.79,80.69-80.69V437.32Z"
                                            transform="translate(-198.23 -205.71)"
                                    />
                                </g>
                            </svg>
                            <span>
                    demo@gmail.com
                  </span>
                        </a>
                    </div>
                    <div class="logo_box">
                        <a href="#">
                            <img src="/public/assets/images/logo-white.png" alt="" />
                            <span>
                    Evernest
                  </span>
                        </a>
                    </div>
                </div>
                <!--
                <div class="info_nav ">
                    <h3>
                        Useful Link
                    </h3>
                    <div class="nav_container">
                        <ul class="navbar-nav ">
                            <li class="nav-item active">
                                <a class="nav-link pl-0" href="index.html">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.html"> About </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="property.html"> Properties </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="blog.html"> Blog </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html"> Contact </a>
                            </li>
                        </ul>
                        <div class="social_box">
                            <a href="">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 291.3 291.3" style="enable-background:new 0 0 291.3 291.3;" xml:space="preserve">
                      <path
                              class="st0"
                              d="M145.7,0C65.2,0,0,65.2,0,145.7c0,80.4,65.2,145.7,145.7,145.7s145.7-65.2,145.7-145.7
                                   C291.3,65.2,226.1,0,145.7,0z M182.2,100.3h-18.8c-5.1,0-8.6,4.3-8.6,9.6v8.4h26.8l-4.3,27.2h-22.5v72.8h-27.4v-72.8h-18.2v-27.2
                                   h18.2v-13.8h0.1c0.5-15.8,6-30.8,32.7-31.8v-0.1h22.1V100.3z"
                      />
                    </svg>
                            </a>
                            <a href="">
                                <svg height="512pt" viewBox="0 0 512 512" width="512pt" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                            d="m256 0c-141.363281 0-256 114.636719-256 256s114.636719 256 256 256 256-114.636719 256-256-114.636719-256-256-256zm116.886719 199.601562c.113281 2.519532.167969 5.050782.167969 7.59375 0 77.644532-59.101563 167.179688-167.183594 167.183594h.003906-.003906c-33.183594 0-64.0625-9.726562-90.066406-26.394531 4.597656.542969 9.277343.8125 14.015624.8125 27.53125 0 52.867188-9.390625 72.980469-25.152344-25.722656-.476562-47.410156-17.464843-54.894531-40.8125 3.582031.6875 7.265625 1.0625 11.042969 1.0625 5.363281 0 10.558593-.722656 15.496093-2.070312-26.886718-5.382813-47.140624-29.144531-47.140624-57.597657 0-.265624 0-.503906.007812-.75 7.917969 4.402344 16.972656 7.050782 26.613281 7.347657-15.777343-10.527344-26.148437-28.523438-26.148437-48.910157 0-10.765624 2.910156-20.851562 7.957031-29.535156 28.976563 35.554688 72.28125 58.9375 121.117187 61.394532-1.007812-4.304688-1.527343-8.789063-1.527343-13.398438 0-32.4375 26.316406-58.753906 58.765625-58.753906 16.902344 0 32.167968 7.144531 42.890625 18.566406 13.386719-2.640625 25.957031-7.53125 37.3125-14.261719-4.394531 13.714844-13.707031 25.222657-25.839844 32.5 11.886719-1.421875 23.214844-4.574219 33.742187-9.253906-7.863281 11.785156-17.835937 22.136719-29.308593 30.429687zm0 0"
                                    />
                                </svg>
                            </a>
                            <a href="">
                                <svg height="512pt" viewBox="0 0 512 512" width="512pt" xmlns="http://www.w3.org/2000/svg">
                                    <path d="m256 0c-141.363281 0-256 114.636719-256 256s114.636719 256 256 256 256-114.636719 256-256-114.636719-256-256-256zm-74.390625 387h-62.347656v-187.574219h62.347656zm-31.171875-213.1875h-.40625c-20.921875 0-34.453125-14.402344-34.453125-32.402344 0-18.40625 13.945313-32.410156 35.273437-32.410156 21.328126 0 34.453126 14.003906 34.859376 32.410156 0 18-13.53125 32.402344-35.273438 32.402344zm255.984375 213.1875h-62.339844v-100.347656c0-25.21875-9.027343-42.417969-31.585937-42.417969-17.222656 0-27.480469 11.601563-31.988282 22.800781-1.648437 4.007813-2.050781 9.609375-2.050781 15.214844v104.75h-62.34375s.816407-169.976562 0-187.574219h62.34375v26.558594c8.285157-12.78125 23.109375-30.960937 56.1875-30.960937 41.019531 0 71.777344 26.808593 71.777344 84.421874zm0 0" />
                                </svg>
                            </a>
                            <a href="">
                                <svg height="512pt" viewBox="0 0 512 512" width="512pt" xmlns="http://www.w3.org/2000/svg">
                                    <path d="m305 256c0 27.0625-21.9375 49-49 49s-49-21.9375-49-49 21.9375-49 49-49 49 21.9375 49 49zm0 0" />
                                    <path
                                            d="m370.59375 169.304688c-2.355469-6.382813-6.113281-12.160157-10.996094-16.902344-4.742187-4.882813-10.515625-8.640625-16.902344-10.996094-5.179687-2.011719-12.960937-4.40625-27.292968-5.058594-15.503906-.707031-20.152344-.859375-59.402344-.859375-39.253906 0-43.902344.148438-59.402344.855469-14.332031.65625-22.117187 3.050781-27.292968 5.0625-6.386719 2.355469-12.164063 6.113281-16.902344 10.996094-4.882813 4.742187-8.640625 10.515625-11 16.902344-2.011719 5.179687-4.40625 12.964843-5.058594 27.296874-.707031 15.5-.859375 20.148438-.859375 59.402344 0 39.25.152344 43.898438.859375 59.402344.652344 14.332031 3.046875 22.113281 5.058594 27.292969 2.359375 6.386719 6.113281 12.160156 10.996094 16.902343 4.742187 4.882813 10.515624 8.640626 16.902343 10.996094 5.179688 2.015625 12.964844 4.410156 27.296875 5.0625 15.5.707032 20.144532.855469 59.398438.855469 39.257812 0 43.90625-.148437 59.402344-.855469 14.332031-.652344 22.117187-3.046875 27.296874-5.0625 12.820313-4.945312 22.953126-15.078125 27.898438-27.898437 2.011719-5.179688 4.40625-12.960938 5.0625-27.292969.707031-15.503906.855469-20.152344.855469-59.402344 0-39.253906-.148438-43.902344-.855469-59.402344-.652344-14.332031-3.046875-22.117187-5.0625-27.296874zm-114.59375 162.179687c-41.691406 0-75.488281-33.792969-75.488281-75.484375s33.796875-75.484375 75.488281-75.484375c41.6875 0 75.484375 33.792969 75.484375 75.484375s-33.796875 75.484375-75.484375 75.484375zm78.46875-136.3125c-9.742188 0-17.640625-7.898437-17.640625-17.640625s7.898437-17.640625 17.640625-17.640625 17.640625 7.898437 17.640625 17.640625c-.003906 9.742188-7.898437 17.640625-17.640625 17.640625zm0 0"
                                    />
                                    <path
                                            d="m256 0c-141.363281 0-256 114.636719-256 256s114.636719 256 256 256 256-114.636719 256-256-114.636719-256-256-256zm146.113281 316.605469c-.710937 15.648437-3.199219 26.332031-6.832031 35.683593-7.636719 19.746094-23.246094 35.355469-42.992188 42.992188-9.347656 3.632812-20.035156 6.117188-35.679687 6.832031-15.675781.714844-20.683594.886719-60.605469.886719-39.925781 0-44.929687-.171875-60.609375-.886719-15.644531-.714843-26.332031-3.199219-35.679687-6.832031-9.8125-3.691406-18.695313-9.476562-26.039063-16.957031-7.476562-7.339844-13.261719-16.226563-16.953125-26.035157-3.632812-9.347656-6.121094-20.035156-6.832031-35.679687-.722656-15.679687-.890625-20.6875-.890625-60.609375s.167969-44.929688.886719-60.605469c.710937-15.648437 3.195312-26.332031 6.828125-35.683593 3.691406-9.808594 9.480468-18.695313 16.960937-26.035157 7.339844-7.480469 16.226563-13.265625 26.035157-16.957031 9.351562-3.632812 20.035156-6.117188 35.683593-6.832031 15.675781-.714844 20.683594-.886719 60.605469-.886719s44.929688.171875 60.605469.890625c15.648437.710937 26.332031 3.195313 35.683593 6.824219 9.808594 3.691406 18.695313 9.480468 26.039063 16.960937 7.476563 7.34375 13.265625 16.226563 16.953125 26.035157 3.636719 9.351562 6.121094 20.035156 6.835938 35.683593.714843 15.675781.882812 20.683594.882812 60.605469s-.167969 44.929688-.886719 60.605469zm0 0"
                                    />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>-->
            </div>
        </div>
    </div>
</section>
<!-- info section ends -->
@endsection
