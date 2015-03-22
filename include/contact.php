    <div class="columns-container">
        <div id="columns" class="container">
            <div class="row" id="columns_inner">
                <div id="center_column" class="center_column col-xs-12" style="width:100%;">
                    <div class="row">
                        <div id="top_column" class="center_column col-xs-12 col-sm-12"></div>
                    </div>
                    <div class="breadcrumb clearfix"><a class="home" href="http://prestashop-demos.org/PRS04/PRS040084/"
                                                        title="Return to Home"><i class="icon-home"></i></a> <span
                            class="navigation-pipe">/</span> <span class="navigation_page">Contact</span></div>
                    <h1 class="page-heading bottom-indent"> Customer service - Contact us</h1>

                    <form action="/PRS04/PRS040084/en/contact-us" method="post" class="contact-form-box"
                          enctype="multipart/form-data">
                        <fieldset><h3 class="page-subheading">send a message</h3>

                            <div class="clearfix">
                                <div class="col-xs-12 col-md-5">
                                    <div class="form-group selector1"><label for="id_contact">Subject Heading</label>
                                        <select id="id_contact" class="form-control" name="id_contact">
                                            <option value="0">-- Choose --</option>
                                            <option value="2">Customer service</option>
                                            <option value="1">Webmaster</option>
                                        </select></div>
                                    <p id="desc_contact0" class="desc_contact">&nbsp;</p>

                                    <p id="desc_contact2" class="desc_contact contact-title" style="display:none;"><i
                                            class="icon-comment-alt"></i>For any question about a product, an order</p>

                                    <p id="desc_contact1" class="desc_contact contact-title" style="display:none;"><i
                                            class="icon-comment-alt"></i>If a technical problem occurs on this website
                                    </p>

                                    <p class="form-group"><label for="email">Email address</label> <input
                                            class="form-control grey validate" type="text" id="email" name="from"
                                            data-validate="isEmail" value=""/></p>

                                    <div class="form-group selector1"><label>Order reference</label> <input
                                            class="form-control grey" type="text" name="id_order" id="id_order"
                                            value=""/></div>
                                    <p class="form-group"><label for="fileUpload">Attach File</label> <input
                                            type="hidden" name="MAX_FILE_SIZE" value="2000000"/> <input type="file"
                                                                                                        name="fileUpload"
                                                                                                        id="fileUpload"
                                                                                                        class="form-control"/>
                                    </p></div>
                                <div class="col-xs-12 col-md-7">
                                    <div class="form-group"><label for="message">Message</label><textarea
                                            class="form-control" id="message" name="message"></textarea></div>
                                </div>
                            </div>
                            <div class="submit">
                                <button type="submit" name="submitMessage" id="submitMessage"
                                        class="button btn btn-default button-medium"><span>Send<i
                                        class="icon-chevron-right right"></i></span></button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
