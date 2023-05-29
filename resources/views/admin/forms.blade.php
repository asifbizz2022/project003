@extends('layouts.main')
@section('content') 
<div class="">  
            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-md-6">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Basic form</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item">option 1</a>
                                        <a class="dropdown-item">option 2</a>
                                    </div>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <form>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>First Name</label>
                                            <input class="form-control" type="text" placeholder="First Name">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Last Name</label>
                                            <input class="form-control" type="text" placeholder="First Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control" type="text" placeholder="Email address">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="form-control" type="password" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label class="ui-checkbox">
                                            <input type="checkbox">
                                            <span class="input-span"></span>Remamber me</label>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-default" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Horizontal Form</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                    <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <form class="form-horizontal">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" placeholder="Email address">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Password</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="password" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Gender</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="password" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-10 ml-sm-auto">
                                            <label class="ui-checkbox ui-checkbox-gray">
                                                <input type="checkbox">
                                                <span class="input-span"></span>Remamber me</label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-10 ml-sm-auto">
                                            <button class="btn btn-info" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Inline Form</div>
                    </div>
                    <div class="ibox-body">
                        <form class="form-inline">
                            <label class="sr-only" for="ex-email">Email</label>
                            <input class="form-control mb-2 mr-sm-2 mb-sm-0" id="ex-email" type="text" placeholder="Email address">
                            <label class="sr-only" for="ex-pass">Email</label>
                            <input class="form-control mb-2 mr-sm-2 mb-sm-0" id="ex-pass" type="password" placeholder="Password">
                            <div class="form-check mb-2 mr-sm-2 mb-sm-0">
                                <label class="ui-checkbox ui-checkbox-inline">
                                    <input type="checkbox">
                                    <span class="input-span"></span>Remamber me</label>
                            </div>
                            <button class="btn btn-success" type="submit">Login</button>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Form Elements</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                    <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <form>
                                    <div class="form-group">
                                        <label>Default input</label>
                                        <input class="form-control" type="text" placeholder="Default input">
                                    </div>
                                    <div class="form-group">
                                        <label>Rounded input</label>
                                        <input class="form-control input-rounded" type="text" placeholder="Rounded input">
                                    </div>
                                    <div class="form-group">
                                        <label>With Help text</label>
                                        <input class="form-control" type="text" placeholder="With Help text">
                                        <span class="help-block">This is some placeholder block-level help text for the above input.</span>
                                    </div>
                                    <h4>Input Groups</h4>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                            <input class="form-control" type="text" placeholder="input group">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input class="form-control" type="text" placeholder="input group">
                                            <div class="input-group-addon">@example.com</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon bg-white">$</div>
                                            <input class="form-control" type="text" placeholder="input group">
                                            <div class="input-group-addon bg-white">.00</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-lock font-16"></i></div>
                                            <input class="form-control" type="text" placeholder="input group">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                            <input class="form-control" type="text" placeholder="input group">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input class="form-control" type="text" placeholder="input group">
                                            <div class="input-group-addon"><i class="fa fa-link"></i></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <input type="checkbox">
                                            </div>
                                            <input class="form-control" type="text" placeholder="input group">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <input type="radio">
                                            </div>
                                            <input class="form-control" type="text" placeholder="input group">
                                        </div>
                                    </div>
                                    <h4>Input Button Groups</h4>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-btn">
                                                <button class="btn btn-info" type="button">Go!</button>
                                            </div>
                                            <input class="form-control" type="text" placeholder="input group">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input class="form-control" type="text" placeholder="input group">
                                            <div class="input-group-btn">
                                                <button class="btn btn-primary" type="button">Go!</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-btn">
                                                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></button>
                                                <ul class="dropdown-menu">
                                                    <a class="dropdown-item">option 1</a>
                                                    <a class="dropdown-item">option 2</a>
                                                </ul>
                                            </div>
                                            <input class="form-control" type="text" placeholder="input group">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input class="form-control" type="text" placeholder="input group">
                                            <div class="input-group-btn">
                                                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></button>
                                                <ul class="dropdown-menu">
                                                    <a class="dropdown-item">option 1</a>
                                                    <a class="dropdown-item">option 2</a>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input class="form-control" type="text" placeholder="input group">
                                            <div class="input-group-btn">
                                                <button class="btn btn-info" type="button">Action</button>
                                                <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown"><i class="fa fa-angle-down"></i></button>
                                                <ul class="dropdown-menu">
                                                    <a class="dropdown-item">option 1</a>
                                                    <a class="dropdown-item">option 2</a>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <h4>With Icons</h4>
                                    <div class="form-group">
                                        <div class="input-group-icon">
                                            <div class="input-icon"><i class="fa fa-link"></i></div>
                                            <input class="form-control" type="text" placeholder="with icon">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group-icon">
                                            <div class="input-icon"><i class="fa fa-keyboard-o"></i></div>
                                            <input class="form-control" type="text" placeholder="with icon">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group-icon">
                                            <div class="input-icon"><i class="fa fa-microphone text-primary font-15"></i></div>
                                            <input class="form-control" type="text" placeholder="with icon">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group-icon right">
                                            <div class="input-icon"><i class="fa fa-eye"></i></div>
                                            <input class="form-control" type="text" placeholder="with icon">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group-icon right">
                                            <div class="input-icon"><i class="fa fa-lock font-16"></i></div>
                                            <input class="form-control" type="text" placeholder="with icon">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group-icon right">
                                            <div class="input-icon"><i class="fa fa-check text-success"></i></div>
                                            <input class="form-control" type="text" placeholder="with icon">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group-icon right">
                                            <div class="input-icon"><i class="icon-cancel text-danger"></i></div>
                                            <input class="form-control" type="text" placeholder="with icon">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Disabled</label>
                                        <input class="form-control" type="text" placeholder="Disabled input" disabled="">
                                    </div>
                                    <div class="form-group">
                                        <label>Static control</label>
                                        <p class="form-control-static">email@example.com</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Select</label>
                                        <select class="form-control">
                                            <option value="">option 1</option>
                                            <option value="">option 2</option>
                                            <option value="">option 3</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Multiple Select</label>
                                        <select class="form-control" multiple="">
                                            <option value="">option 1</option>
                                            <option value="">option 2</option>
                                            <option value="">option 3</option>
                                            <option value="">option 4</option>
                                            <option value="">option 5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>textarea</label>
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Checkboxes & Radios</label>
                                        <div class="row">
                                            <div class="col-6 m-b-20">
                                                <div class="check-list">
                                                    <label class="ui-checkbox">
                                                        <input type="checkbox">
                                                        <span class="input-span"></span>Checkbox</label>
                                                    <label class="ui-checkbox">
                                                        <input type="checkbox">
                                                        <span class="input-span"></span>Checkbox</label>
                                                    <label class="ui-checkbox">
                                                        <input type="checkbox" checked="">
                                                        <span class="input-span"></span>Checked</label>
                                                    <label class="ui-checkbox ui-checkbox-gray">
                                                        <input type="checkbox">
                                                        <span class="input-span"></span>Checkbox gray</label>
                                                    <label class="ui-checkbox disabled">
                                                        <input type="checkbox" disabled="">
                                                        <span class="input-span"></span>Disabled</label>
                                                </div>
                                            </div>
                                            <div class="col-6 m-b-20">
                                                <div class="check-list">
                                                    <label class="ui-checkbox ui-checkbox-primary">
                                                        <input type="checkbox">
                                                        <span class="input-span"></span>Primary</label>
                                                    <label class="ui-checkbox ui-checkbox-success">
                                                        <input type="checkbox">
                                                        <span class="input-span"></span>Success</label>
                                                    <label class="ui-checkbox ui-checkbox-info">
                                                        <input type="checkbox">
                                                        <span class="input-span"></span>Info</label>
                                                    <label class="ui-checkbox ui-checkbox-warning">
                                                        <input type="checkbox">
                                                        <span class="input-span"></span>Warning</label>
                                                    <label class="ui-checkbox ui-checkbox-danger">
                                                        <input type="checkbox">
                                                        <span class="input-span"></span>Danger</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 m-b-20">
                                                <div class="check-list">
                                                    <label class="ui-radio">
                                                        <input type="radio" name="test">
                                                        <span class="input-span"></span>Radio</label>
                                                    <label class="ui-radio">
                                                        <input type="radio" name="test">
                                                        <span class="input-span"></span>Radio</label>
                                                    <label class="ui-radio">
                                                        <input type="radio" name="test" checked="">
                                                        <span class="input-span"></span>Checked</label>
                                                    <label class="ui-radio ui-radio-gray">
                                                        <input type="radio" name="test">
                                                        <span class="input-span"></span>Radio Gray</label>
                                                    <label class="ui-radio disabled">
                                                        <input type="radio" name="test" disabled="">
                                                        <span class="input-span"></span>Disabled</label>
                                                </div>
                                            </div>
                                            <div class="col-6 m-b-20">
                                                <div class="check-list">
                                                    <label class="ui-radio ui-radio-primary">
                                                        <input type="radio" name="test2">
                                                        <span class="input-span"></span>Primary</label>
                                                    <label class="ui-radio ui-radio-success">
                                                        <input type="radio" name="test2">
                                                        <span class="input-span"></span>Success</label>
                                                    <label class="ui-radio ui-radio-info">
                                                        <input type="radio" name="test2">
                                                        <span class="input-span"></span>Info</label>
                                                    <label class="ui-radio ui-radio-warning">
                                                        <input type="radio" name="test2">
                                                        <span class="input-span"></span>Warning</label>
                                                    <label class="ui-radio ui-radio-danger">
                                                        <input type="radio" name="test2">
                                                        <span class="input-span"></span>Danger</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Inline Checkboxes</label>
                                        <div class="m-b-10">
                                            <label class="ui-checkbox ui-checkbox-inline">
                                                <input type="checkbox">
                                                <span class="input-span"></span>Option 1</label>
                                            <label class="ui-checkbox ui-checkbox-inline">
                                                <input type="checkbox">
                                                <span class="input-span"></span>Option 2</label>
                                            <label class="ui-checkbox ui-checkbox-inline">
                                                <input type="checkbox">
                                                <span class="input-span"></span>Option 3</label>
                                        </div>
                                        <div>
                                            <label class="ui-radio ui-radio-inline">
                                                <input type="radio" name="test">
                                                <span class="input-span"></span>Option 1</label>
                                            <label class="ui-radio ui-radio-inline">
                                                <input type="radio" name="test">
                                                <span class="input-span"></span>Option 2</label>
                                            <label class="ui-radio ui-radio-inline">
                                                <input type="radio" name="test">
                                                <span class="input-span"></span>Option 3</label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Form Elements</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                    <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <h4>Control sizing</h4>
                                <div class="form-group">
                                    <input class="form-control input-sm" type="text" placeholder="Small">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Default">
                                </div>
                                <div class="form-group">
                                    <input class="form-control input-lg" type="text" placeholder="Big">
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                        <input class="form-control" type="text" placeholder="small input group">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-lg">
                                        <div class="input-group-addon"><i class="fa fa-link"></i></div>
                                        <input class="form-control" type="text" placeholder="large input group">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <select class="form-control input-sm">
                                        <option>Small select</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option>Default select</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control input-lg">
                                        <option>Big select</option>
                                    </select>
                                </div>
                                <div class="form-group has-success">
                                    <label class="col-form-label">Input success state</label>
                                    <input class="form-control" type="text" placeholderx="Rounded input">
                                </div>
                                <div class="form-group has-warning">
                                    <label class="col-form-label">Input warning state</label>
                                    <input class="form-control" type="text" placeholderx="Rounded input">
                                </div>
                                <div class="form-group has-error">
                                    <label class="col-form-label">Input error state</label>
                                    <input class="form-control" type="text" placeholderx="Rounded input">
                                </div>
                                <h4>With icons</h4>
                                <div>
                                    <div class="form-group">
                                        <label class="col-form-label">Default input</label>
                                        <div class="input-group-icon right">
                                            <div class="input-icon"><i class="fa fa-info-circle"></i></div>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group has-success">
                                        <label class="col-form-label">Input success state</label>
                                        <div class="input-group-icon right">
                                            <div class="input-icon"><i class="fa fa-check"></i></div>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group has-warning">
                                        <label class="col-form-label">Input warning state</label>
                                        <div class="input-group-icon right">
                                            <div class="input-icon"><i class="fa fa-warning"></i></div>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group has-error">
                                        <label class="col-form-label">Input error state</label>
                                        <div class="input-group-icon right">
                                            <div class="input-icon"><i class="fa fa-exclamation"></i></div>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 
            </div>
            <!-- END PAGE CONTENT-->
            
        </div>
<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-lg-6">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Select 2
                        <a class="btn btn-xs btn-default m-l-5" href="https://select2.github.io/" target="_blank">Official site</a>
                    </div>
                </div>
                <div class="ibox-body">
                    <div class="form-group">
                        <label class="form-control-label">Single select</label>
                        <select class="form-control select2_demo_1">
                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                <option value="AK">Alaska</option>
                                <option value="HI">Hawaii</option>
                            </optgroup>
                            <optgroup label="Pacific Time Zone">
                                <option value="CA">California</option>
                                <option value="NV">Nevada</option>
                                <option value="OR">Oregon</option>
                                <option value="WA">Washington</option>
                            </optgroup>
                            <optgroup label="Mountain Time Zone">
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NM">New Mexico</option>
                                <option value="ND">North Dakota</option>
                                <option value="UT">Utah</option>
                                <option value="WY">Wyoming</option>
                            </optgroup>
                            <optgroup label="Central Time Zone">
                                <option value="AL">Alabama</option>
                                <option value="AR">Arkansas</option>
                                <option value="IL">Illinois</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="OK">Oklahoma</option>
                                <option value="SD">South Dakota</option>
                                <option value="TX">Texas</option>
                                <option value="TN">Tennessee</option>
                                <option value="WI">Wisconsin</option>
                            </optgroup>
                            <optgroup label="Eastern Time Zone">
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="IN">Indiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="OH">Ohio</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WV">West Virginia</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Multiple select</label>
                        <select class="form-control select2_demo_1" multiple="">
                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                <option value="AK">Alaska</option>
                                <option value="HI">Hawaii</option>
                            </optgroup>
                            <optgroup label="Pacific Time Zone">
                                <option value="CA">California</option>
                                <option value="NV">Nevada</option>
                                <option value="OR">Oregon</option>
                                <option value="WA">Washington</option>
                            </optgroup>
                            <optgroup label="Mountain Time Zone">
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NM">New Mexico</option>
                                <option value="ND">North Dakota</option>
                                <option value="UT">Utah</option>
                                <option value="WY">Wyoming</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">With Placeholder & allow clear</label>
                        <select class="form-control select2_demo_2">
                            <option></option>
                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                <option value="AK">Alaska</option>
                                <option value="HI">Hawaii</option>
                            </optgroup>
                            <optgroup label="Pacific Time Zone">
                                <option value="CA">California</option>
                                <option value="NV">Nevada</option>
                                <option value="OR">Oregon</option>
                                <option value="WA">Washington</option>
                            </optgroup>
                            <optgroup label="Mountain Time Zone">
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NM">New Mexico</option>
                                <option value="ND">North Dakota</option>
                                <option value="UT">Utah</option>
                                <option value="WY">Wyoming</option>
                            </optgroup>
                        </select>
                    </div>
                </div>
            </div>
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Data picker
                        <a class="btn btn-default btn-xs" href="https://github.com/uxsolutions/bootstrap-datepicker" target="_blank">Official site</a>
                    </div>
                </div>
                <div class="ibox-body">
                    <div class="form-group" id="date_1">
                        <label class="font-normal"></label>
                        <div class="input-group date">
                            <span class="input-group-addon bg-white"><i class="fa fa-calendar"></i></span>
                            <input class="form-control" type="text" value="04/12/2017">
                        </div>
                    </div>
                    <div class="form-group" id="date_2">
                        <label class="font-normal">One Year view</label>
                        <div class="input-group date">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input class="form-control" type="text" value="07/11/2017">
                        </div>
                    </div>
                    <div class="form-group" id="date_3">
                        <label class="font-normal">Decade view</label>
                        <div class="input-group date">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input class="form-control" type="text" value="08/12/2017">
                        </div>
                    </div>
                    <div class="form-group" id="date_4">
                        <label class="font-normal">Month select</label>
                        <div class="input-group date">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input class="form-control" type="text" value="06/12/2017">
                        </div>
                    </div>
                    <div class="form-group" id="date_5">
                        <label class="font-normal">Range select</label>
                        <div class="input-daterange input-group" id="datepicker">
                            <input class="input-sm form-control" type="text" name="start" value="04/12/2017">
                            <span class="input-group-addon p-l-10 p-r-10">to</span>
                            <input class="input-sm form-control" type="text" name="end" value="08/17/2018">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Inline</label>
                        <div id="date_6" data-date-format="mm/dd/yyyy"> </div>
                    </div>
                </div>
            </div>
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Timepicker
                        <a class="btn btn-default btn-xs" href="https://jdewit.github.io/bootstrap-timepicker/" target="_blank">Official site</a>
                    </div>
                </div>
                <div class="ibox-body">
                    <div class="input-group bootstrap-timepicker timepicker" data-autoclose="true">
                        <input class="form-control" type="text">
                        <span class="input-group-addon">
                            <span class="fa fa-clock-o"></span>
                        </span>
                    </div>
                </div>
            </div>
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">jQuery MiniColors
                        <a class="btn btn-default btn-xs" href="http://labs.abeautifulsite.net/jquery-minicolors/" target="_blank">Official site</a>
                    </div>
                </div>
                <div class="ibox-body">
                    <div class="form-group">
                        <label>Hue (default)</label>
                        <input class="form-control minicolors" type="text" data-control="hue" value="#F75A5F">
                    </div>
                    <div class="form-group">
                        <label>Saturation</label>
                        <input class="form-control minicolors" type="text" data-control="saturation" value="#18C5A9">
                    </div>
                    <div class="form-group">
                        <label>Brightness</label>
                        <input class="form-control minicolors" type="text" data-control="brightness" value="#F39C12">
                    </div>
                    <div class="form-group">
                        <label>Wheel</label>
                        <input class="form-control minicolors" type="text" data-control="wheel" value="#23B7E5">
                    </div>
                    <div class="form-group">
                        <label>Hidden input</label>
                        <input class="form-control minicolors" type="hidden" value="#3498DB">
                    </div>
                    <div class="form-group">
                        <label>RGB</label>
                        <input class="form-control minicolors" type="text" data-format="rgb" value="rgb(33, 147, 58)">
                    </div>
                    <div class="form-group">
                        <label>RGBA</label>
                        <input class="form-control minicolors" type="text" data-format="rgb" data-opacity="0.50" value="rgba(52, 64, 158, 0.5)">
                    </div>
                    <div class="form-group">
                        <label>Swatches</label>
                        <input class="form-control minicolors" type="text" data-swatches="#fff|#000|#f00|#0f0|#00f|#ff0|#0ff" value="#17e8c9">
                    </div>
                    <div class="form-group">
                        <label>Swatches and opacity</label>
                        <input class="form-control minicolors" type="text" data-format="rgb" data-opacity="0.50" data-swatches="#fff|#000|#f00|#0f0|#00f|#ff0|rgba(0,0,255,0.5)" value="rgba(14, 206, 235, .5)">
                    </div>
                    <div class="form-group">
                        <label>bottom right</label>
                        <input class="form-control minicolors" type="text" data-position="bottom right" value="#6654a8">
                    </div>
                    <p>Valid positions include <code>bottom left</code>, <code>bottom right</code>, <code>top left</code>, and <code>top right</code>.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Knob - Dial
                        <a class="btn btn-xs btn-default m-l-5" href="https://github.com/aterrien/jQuery-Knob" target="_blank">Official site</a>
                    </div>
                </div>
                <div class="ibox-body">
                    <div class="row">
                        <div class="col-sm-4 m-b-20">
                            <input class="dial" value="45" data-width="85" data-height="85" type="text">
                        </div>
                        <div class="col-sm-4 m-b-20">
                            <input class="dial" value="550" data-width="85" data-height="85" data-thickness=".2" data-fgcolor="#18C5A9" data-min="-1000" data-max="1000" data-step="10" data-displayprevious="true" type="text">
                        </div>
                        <div class="col-sm-4 m-b-20">
                            <input class="dial" value="20" data-width="85" data-height="85" data-fgcolor="#f75a5f" data-cursor="true" data-thicknessx=".3" type="text">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 m-b-20">
                            <input class="dial" value="45" data-width="85" data-height="85" data-fgcolor="#F39C12" data-angleoffset="90" type="text">
                        </div>
                        <div class="col-sm-4 m-b-20">
                            <input class="dial" value="10.4" data-width="85" data-height="85" data-fgcolor="#2CC4CB" data-step=".1" data-min="-100" data-displayprevious="true" type="text">
                        </div>
                        <div class="col-sm-4 m-b-20">
                            <input class="dial" value="42" data-width="85" data-height="85" data-fgcolor="#f75a5f" data-angleoffset="-125" data-anglearc="250" data-rotation="anticlockwise" type="text">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 m-b-20 text-center">
                            <input class="dial" value="0" data-width="110" data-height="110" data-thickness=".2" data-fgcolor="#18C5A9" data-max="500" data-min="-500" data-displayprevious="true" type="text">
                        </div>
                        <div class="col-sm-6 m-b-20 text-center">
                            <input class="dial" value="22.6" data-width="110" data-height="110" data-fgcolor="#2CC4CB" data-step=".1" data-min="-100" data-displayprevious="true" type="text">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>
@endsection