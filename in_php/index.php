<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Slideform</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="css/slideform.css">

    <style>
        form {
            opacity: 0;
            transition: all .3s ease;
        }
        
        form.slideform-form {
            opacity: 1;
        }
        
        html,
        body {
            height: 100%;
            width: 100%;
            padding: 0;
            margin: 0;
            overflow: hidden;
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
        }
        
        body,
        h1,
        h2,
        h3,
        p,
        button,
        input,
        select,
        textarea {
            font-family: 'Raleway', Arial, sans-serif;
        }
        
        input {
            font-size: 16px;
        }
        
        label {
            text-transform: uppercase;
            display: block;
            font-size: 14px;
            margin-bottom: 10px;
            letter-spacing: .5px;
            font-weight: 600;
            font-family: Raleway;
        }
        
        h1 {
            letter-spacing: .5px;
        }
        
        h2,
        h3 {
            margin-top: 0;
        }
        
        h2 {
            font-size: 28px;
            margin: 0 0 15px;
        }
        
        h3 {
            font-size: 20px;
            line-height: 1.4em;
            font-weight: bold;
            margin-bottom: 20px;
            margin-top: 20px;
        }
        
        h4 {
            font-size: 16px;
            font-weight: bold;
            margin: 20px 0 10px;
        }
        
        p {
            font-size: 16px;
            line-height: 1.6em;
            margin-bottom: 15px;
        }
        
        a {
            -webkit-tap-highlight-color: transparent;
        }
        
        .gist .gist-file {
            margin-top: 40px;
        }
        
        .gist .gist-meta {
            display: none !important;
        }
        
        .slideform-slide-number {
            border-radius: 50%;
            height: 50px;
            width: 50px;
            font-size: 28px;
            background-color: #ff7f11;
            color: white;
            display: block;
            text-align: center;
        }
    </style>

</head>

<body>

    <form >

        <div class="slideform-slide">
            <div class="slideform-group">
                <div class="slideform-slide-number"></div>
                <h1>Hello Slideforms</h1>

                <p>This is a Jquery Plugin to create a Slideform like this. The first step is to include the <tt>jquery.slideform.js</tt> file in your stack, and then you are ready to go.
                </p>

            </div>
        </div>


        <div class="slideform-slide">
            <div class="slideform-group">
                <div class="slideform-slide-number"></div>

                <h2>You can create inputs</h2>

                <p>Inputs are very easy to create and they work like any other form input</p>

                <label for="input">Input Label</label>
                <input type="text" name="input" placeholder="Write something here ...">

            </div>
        </div>
        <div class="slideform-slide">
            <div class="slideform-group">
                <div class="slideform-slide-number"></div>

                <h2>Add Custome section </h2>

                <p>Test to add section for test about its working. Its working well.</p>

                <label for="textarea">Textarea</label>
                <textarea name="textarea"></textarea>

            </div>
        </div>

        <div class="slideform-slide">
            <div class="slideform-group">
                <div class="slideform-slide-number"></div>

                <h2>Radios and Checkboxes</h2>

                <p>Some fancy effects, taiolred for mobile experiences.</p>

                <h3>Radio Buttons</h3>
                <div class="options options-list">
                    <label for=""><input type="radio" name="group1" value="Angola"><span>Angola</span></label>
                    <label for=""><input type="radio" name="group1" value="Madagascar"><span>Madagascar</span></label>
                    <label for=""><input type="radio" name="group1" value="Kenya"><span>Kenya</span></label>
                </div>

                <h3>Checkboxes</h3>
                <div class="options options-list">
                    <label for=""><input type="checkbox" name="group2" value="Russia"><span>Russia</span></label>
                    <label for=""><input type="checkbox" name="group2" value="United Kingdom"><span>United Kingdom</span></label>
                    <label for=""><input type="checkbox" name="group2" value="France"><span>France</span></label>
                </div>
            </div>
        </div>


        <div class="slideform-slide">
            <div class="slideform-group">
                <div class="slideform-slide-number"></div>

                <h2>Radios and Checkboxes as Buttons</h2>
                <p>This is particularily useful for mobile enviroments</p>

                <h3>Checkboxes Example</h3>
                <div class="options options-buttons">
                    <label for=""><input type="checkbox" name="group3" value="USD"><span>USD</span></label>
                    <label for=""><input type="checkbox" name="group3" value="GBP"><span>GBP</span></label>
                    <label for=""><input type="checkbox" name="group3" value="EUR"><span>EUR</span></label>
                </div>

                <h3>Radios Example</h3>
                <div class="options options-buttons">
                    <label for=""><input type="radio" name="group4" value="Yes"><span>Yes</span></label>
                    <label for=""><input type="radio" name="group4" value="No"><span>No</span></label>
                    <label for=""><input type="radio" name="group4" value="Maybe"><span>Maybe</span></label>
                </div>
            </div>
        </div>



        <div class="slideform-slide">
            <div class="slideform-group">
                <div class="slideform-slide-number"></div>

                <h2>You can also set conditions with pretty simple data attributes</h2>

                <h3>Show Condition?</h3>
                <div class="options options-buttons">
                    <label for=""><input type="radio" name="group5" value="yes"><span>Yes</span></label>
                    <label for=""><input type="radio" name="group5" value="no"><span>No</span></label>
                </div>

                <div data-condition="input.group5 == 'yes'">
                    <h3>This is another condition</h3>
                    <div class="options options-buttons">
                        <label for=""><input type="radio" name="group6" value="yes"><span>Yes</span></label>
                        <label for=""><input type="radio" name="group6" value="no"><span>No</span></label>
                    </div>
                </div>

                <div data-condition="input.group5 == 'yes' &&  input.group6 == 'yes'">
                    <p>This message appears after all conditions have been marked as "yes".</p>
                </div>
            </div>
        </div>


        <div class="slideform-slide">
            <div class="slideform-group">
                <div class="slideform-slide-number"></div>

                <h2>Ready for Jquery Validation Plugin</h2>

                <p>You can attach the <tt>jquery.validate.js</tt> file and define your own validation rules.</p>
                <div class="options options-buttons">
                    <label for=""><input type="radio" name="group7" value="valid"><span>Valid</span></label>
                    <label for=""><input type="radio" name="group7" value="invalid"><span>Invalid</span></label>
                </div>
            </div>
        </div>

        <div class="slideform-slide">
            <div class="slideform-group">
                <div class="slideform-slide-number"></div>

                <h2>Ready for Jquery Validation Plugin</h2>

                <p>You can attach the <tt>jquery.validate.js</tt> file and define your own validation rules.</p>
                <div class="options options-buttons">
                    <label for=""><input type="radio" name="group7" value="valid"><span>Valid</span></label>
                    <label for=""><input type="radio" name="group7" value="invalid"><span>Invalid</span></label>
                </div>
            </div>
        </div>

        <div class="slideform-slide">
            <div class="slideform-group">
                <div class="slideform-slide-number"></div>

                <h2>Submit Slide</h2>
                <p>You can attach the <tt>jquery.validate.js</tt> file and define your own validation rules.</p>

            </div>
        </div>

        <footer class="slideform-footer">
            <div class="slideform-progress-bar">
                <span></span>
            </div>

            <div class="buttons">
                <button class="slideform-btn slideform-btn-next"><i class="icon-chevron-down"></i></button>
                <button class="slideform-btn slideform-btn-prev"><i class="icon-chevron-up"></i></button>
            </div>
        </footer>

    </form>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fastclick/1.0.6/fastclick.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>
    <script src="js/slideform.js"></script>

    <script>
        (function($) {
            jQuery.validator.addMethod("equals", function(value, element, param) {
                return this.optional(element) || value === param;
            });

            $(document).ready(function() {

                var $form = $('form');

                $form.slideform({
                    validate: {
                        rules: {
                            group7: {
                                required: true,
                                equals: "valid"
                            }
                        },
                        messages: {
                            group7: {
                                required: 'Please select an option',
                                equals: 'You must select valid!'
                            }
                        }
                    },
                    submit: function(event, form) {
                    var from = $('form').serialize();    
                    $.ajax({
                        type: "POST",
                        url: "submit.php",
                        data: from,
                        dataType: "json",
                        success: function (response) {
                            console.log(response);
                        }
                    });
                    }
                });
            });
        }(jQuery))
    </script>
</body>

</html>