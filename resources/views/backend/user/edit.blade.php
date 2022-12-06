@extends('backend.layouts.app')

@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Profile</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mt--6">
    <div class="card mb-4">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6 edit-user-div">
                    <div class="alert alert-danger d-none" id="validationErrorsBox"></div>

                    <div class="row">
                        <div class="form-group col-sm-12 d-flex justify-content-center">
                            <div class="card-user-image">
                                <form method="POST" action="https://infyportfolio.infyom.com/users/1/edit"
                                    accept-charset="UTF-8" id="profileImageUpdate" enctype="multipart/form-data"><input
                                        name="_token" type="hidden" value="lzIegjh3BhHWQ1qfZdZHcaStDTIhCtCCC93vhjtd">
                                    <img src="https://infyportfolio.nyc3.digitaloceanspaces.com/profile/223/IEEE-certificate.jpeg"
                                        class="rounded-circle" id="profilePreview">
                                    <input id="icon" class="profile_image"
                                        accept="image/jpg,image/jpeg,image/png,image/gif" name="profile_image"
                                        type="file">
                                    <i class="fas fa-camera"></i>
                                </form>
                            </div>
                        </div>
                        <div class="col-sm-12 text-center">
                            <h1 class="text-primary mt-3 ml-3">Visha Ribdiya</h1>
                            <span class="text-gray ml-3">admin@infyportfolio.com</span><br>
                            <span class="text-gray ml-3">Software Engineer</span>
                        </div>
                    </div><br>

                    <form method="POST" action="https://infyportfolio.infyom.com/users/1/update" accept-charset="UTF-8"
                        id="updateUserForm"><input name="_method" type="hidden" value="PUT"><input name="_token"
                            type="hidden" value="lzIegjh3BhHWQ1qfZdZHcaStDTIhCtCCC93vhjtd">
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="first_name">First Name:</label><span class="text-danger">*</span>
                                <input class="form-control" maxlength="255" required placeholder="Enter First Name"
                                    name="first_name" type="text" value="Visha" id="first_name">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="first_name">Last Name:</label><span class="text-danger">*</span>
                                <input class="form-control" maxlength="255" required placeholder="Enter Last Name"
                                    name="last_name" type="text" value="Ribdiya">
                            </div>










                            <div class="col-md-6">
                                <label for="phone">Phone:</label><span class="text-danger">*</span>
                                <div class="d-flex">
                                    <div class="region-code">
                                        <button type="button"
                                            class="btn btn-default mr-0 f16 dropdown-toggle region-code-button"
                                            id="dropdownMenuButton" data-toggle="dropdown">
                                            <span class="flag ca" id="btnFlag"></span>
                                            <span class="btn-cc">&nbsp;&nbsp;+1&nbsp;&nbsp;</span>
                                            <span class="caretButton"></span>
                                        </button>
                                        <div class="region-code-div" aria-labelledby="dropdownMenuButton">
                                            <ul class="f16 dropdown-menu region-code-ul">
                                                <div class="region-code-ul-input-div"><input type="text"
                                                        class="form-control search-country" />
                                                </div>
                                                <div class="region-code-ul-div"></div>
                                            </ul>
                                        </div>
                                    </div>
                                    <input type="tel" class="form-control" name="phone" id="phoneNumber"
                                        value="14378861383"
                                        onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"
                                        required />
                                    <input type="hidden" name="region_code" id="regionCode" value="1" />
                                    <input type="hidden" name="region_code_flag" id="regionCodeFlag" value="ca" />
                                    <span id="valid-msg" class="hide">✓ &nbsp; Valid</span>
                                    <span id="error-msg" class="hide"></span>
                                </div>
                            </div>


                            <div class="form-group col-md-6">
                                <label for="email">Email:</label><span class="text-danger">*</span>
                                <input class="form-control" required placeholder="Enter Email" name="email"
                                    type="email" value="admin@infyportfolio.com" id="email">
                            </div>














                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="dob">DOB:</label><span class="text-danger">*</span>
                                    <input class="form-control" required placeholder="Select DOB"
                                        data-date-end-date="0d" autocomplete="off" name="dob" type="text"
                                        value="06/27/1995" id="dob">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="experience">Experience:</label><span class="text-danger">* </span>
                                    <span> (In Year)</span>
                                    <input class="form-control" required step="any"
                                        placeholder="Enter Experience" min="0" maxlength="3"
                                        name="experience" type="text" value="12" id="experience">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="job_title">Job Title:</label><span class="text-danger">*</span>
                                    <input class="form-control" required placeholder="Enter Job title"
                                        name="job_title" type="text" value="Software Engineer" id="job_title">
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="country">Country:</label><span class="text-danger">*</span>
                                <select id="countryId" class="form-control" required name="country_id">
                                    <option value="">Select Country</option>
                                    <option value="1">Afghanistan</option>
                                    <option value="2">Albania</option>
                                    <option value="3">Algeria</option>
                                    <option value="4">American Samoa</option>
                                    <option value="5">Andorra</option>
                                    <option value="6">Angola</option>
                                    <option value="7">Anguilla</option>
                                    <option value="8">Antarctica</option>
                                    <option value="9">Antigua And Barbuda</option>
                                    <option value="10">Argentina</option>
                                    <option value="11">Armenia</option>
                                    <option value="12">Aruba</option>
                                    <option value="13">Australia</option>
                                    <option value="14">Austria</option>
                                    <option value="15">Azerbaijan</option>
                                    <option value="16">Bahamas The</option>
                                    <option value="17">Bahrain</option>
                                    <option value="18">Bangladesh</option>
                                    <option value="19">Barbados</option>
                                    <option value="20">Belarus</option>
                                    <option value="21">Belgium</option>
                                    <option value="22">Belize</option>
                                    <option value="23">Benin</option>
                                    <option value="24">Bermuda</option>
                                    <option value="25">Bhutan</option>
                                    <option value="26">Bolivia</option>
                                    <option value="27">Bosnia and Herzegovina</option>
                                    <option value="28">Botswana</option>
                                    <option value="29">Bouvet Island</option>
                                    <option value="30">Brazil</option>
                                    <option value="31">British Indian Ocean Territory</option>
                                    <option value="32">Brunei</option>
                                    <option value="33">Bulgaria</option>
                                    <option value="34">Burkina Faso</option>
                                    <option value="35">Burundi</option>
                                    <option value="36">Cambodia</option>
                                    <option value="37">Cameroon</option>
                                    <option value="38" selected="selected">Canada</option>
                                    <option value="39">Cape Verde</option>
                                    <option value="40">Cayman Islands</option>
                                    <option value="41">Central African Republic</option>
                                    <option value="42">Chad</option>
                                    <option value="43">Chile</option>
                                    <option value="44">China</option>
                                    <option value="45">Christmas Island</option>
                                    <option value="46">Cocos (Keeling) Islands</option>
                                    <option value="47">Colombia</option>
                                    <option value="48">Comoros</option>
                                    <option value="51">Cook Islands</option>
                                    <option value="52">Costa Rica</option>
                                    <option value="53">Cote D&#039;&#039;Ivoire (Ivory Coast)</option>
                                    <option value="54">Croatia (Hrvatska)</option>
                                    <option value="55">Cuba</option>
                                    <option value="56">Cyprus</option>
                                    <option value="57">Czech Republic</option>
                                    <option value="50">Democratic Republic Of The Congo</option>
                                    <option value="58">Denmark</option>
                                    <option value="59">Djibouti</option>
                                    <option value="60">Dominica</option>
                                    <option value="61">Dominican Republic</option>
                                    <option value="62">East Timor</option>
                                    <option value="63">Ecuador</option>
                                    <option value="64">Egypt</option>
                                    <option value="65">El Salvador</option>
                                    <option value="66">Equatorial Guinea</option>
                                    <option value="67">Eritrea</option>
                                    <option value="68">Estonia</option>
                                    <option value="69">Ethiopia</option>
                                    <option value="70">External Territories of Australia</option>
                                    <option value="71">Falkland Islands</option>
                                    <option value="72">Faroe Islands</option>
                                    <option value="73">Fiji Islands</option>
                                    <option value="74">Finland</option>
                                    <option value="75">France</option>
                                    <option value="76">French Guiana</option>
                                    <option value="77">French Polynesia</option>
                                    <option value="78">French Southern Territories</option>
                                    <option value="79">Gabon</option>
                                    <option value="80">Gambia The</option>
                                    <option value="81">Georgia</option>
                                    <option value="82">Germany</option>
                                    <option value="83">Ghana</option>
                                    <option value="84">Gibraltar</option>
                                    <option value="85">Greece</option>
                                    <option value="86">Greenland</option>
                                    <option value="87">Grenada</option>
                                    <option value="88">Guadeloupe</option>
                                    <option value="89">Guam</option>
                                    <option value="90">Guatemala</option>
                                    <option value="91">Guernsey and Alderney</option>
                                    <option value="92">Guinea</option>
                                    <option value="93">Guinea-Bissau</option>
                                    <option value="94">Guyana</option>
                                    <option value="95">Haiti</option>
                                    <option value="96">Heard and McDonald Islands</option>
                                    <option value="97">Honduras</option>
                                    <option value="98">Hong Kong S.A.R.</option>
                                    <option value="99">Hungary</option>
                                    <option value="100">Iceland</option>
                                    <option value="101">India</option>
                                    <option value="102">Indonesia</option>
                                    <option value="103">Iran</option>
                                    <option value="104">Iraq</option>
                                    <option value="105">Ireland</option>
                                    <option value="106">Israel</option>
                                    <option value="107">Italy</option>
                                    <option value="108">Jamaica</option>
                                    <option value="109">Japan</option>
                                    <option value="110">Jersey</option>
                                    <option value="111">Jordan</option>
                                    <option value="112">Kazakhstan</option>
                                    <option value="113">Kenya</option>
                                    <option value="114">Kiribati</option>
                                    <option value="115">Korea North</option>
                                    <option value="116">Korea South</option>
                                    <option value="117">Kuwait</option>
                                    <option value="118">Kyrgyzstan</option>
                                    <option value="119">Laos</option>
                                    <option value="120">Latvia</option>
                                    <option value="121">Lebanon</option>
                                    <option value="122">Lesotho</option>
                                    <option value="123">Liberia</option>
                                    <option value="124">Libya</option>
                                    <option value="125">Liechtenstein</option>
                                    <option value="126">Lithuania</option>
                                    <option value="127">Luxembourg</option>
                                    <option value="128">Macau S.A.R.</option>
                                    <option value="129">Macedonia</option>
                                    <option value="130">Madagascar</option>
                                    <option value="131">Malawi</option>
                                    <option value="132">Malaysia</option>
                                    <option value="133">Maldives</option>
                                    <option value="134">Mali</option>
                                    <option value="135">Malta</option>
                                    <option value="136">Man (Isle of)</option>
                                    <option value="137">Marshall Islands</option>
                                    <option value="138">Martinique</option>
                                    <option value="139">Mauritania</option>
                                    <option value="140">Mauritius</option>
                                    <option value="141">Mayotte</option>
                                    <option value="142">Mexico</option>
                                    <option value="143">Micronesia</option>
                                    <option value="144">Moldova</option>
                                    <option value="145">Monaco</option>
                                    <option value="146">Mongolia</option>
                                    <option value="147">Montserrat</option>
                                    <option value="148">Morocco</option>
                                    <option value="149">Mozambique</option>
                                    <option value="150">Myanmar</option>
                                    <option value="151">Namibia</option>
                                    <option value="152">Nauru</option>
                                    <option value="153">Nepal</option>
                                    <option value="154">Netherlands Antilles</option>
                                    <option value="155">Netherlands The</option>
                                    <option value="156">New Caledonia</option>
                                    <option value="157">New Zealand</option>
                                    <option value="158">Nicaragua</option>
                                    <option value="159">Niger</option>
                                    <option value="160">Nigeria</option>
                                    <option value="161">Niue</option>
                                    <option value="162">Norfolk Island</option>
                                    <option value="163">Northern Mariana Islands</option>
                                    <option value="164">Norway</option>
                                    <option value="165">Oman</option>
                                    <option value="166">Pakistan</option>
                                    <option value="167">Palau</option>
                                    <option value="168">Palestinian Territory Occupied</option>
                                    <option value="169">Panama</option>
                                    <option value="170">Papua new Guinea</option>
                                    <option value="171">Paraguay</option>
                                    <option value="172">Peru</option>
                                    <option value="173">Philippines</option>
                                    <option value="174">Pitcairn Island</option>
                                    <option value="175">Poland</option>
                                    <option value="176">Portugal</option>
                                    <option value="177">Puerto Rico</option>
                                    <option value="178">Qatar</option>
                                    <option value="49">Republic Of The Congo</option>
                                    <option value="179">Reunion</option>
                                    <option value="180">Romania</option>
                                    <option value="181">Russia</option>
                                    <option value="182">Rwanda</option>
                                    <option value="183">Saint Helena</option>
                                    <option value="184">Saint Kitts And Nevis</option>
                                    <option value="185">Saint Lucia</option>
                                    <option value="186">Saint Pierre and Miquelon</option>
                                    <option value="187">Saint Vincent And The Grenadines</option>
                                    <option value="188">Samoa</option>
                                    <option value="189">San Marino</option>
                                    <option value="190">Sao Tome and Principe</option>
                                    <option value="191">Saudi Arabia</option>
                                    <option value="192">Senegal</option>
                                    <option value="193">Serbia</option>
                                    <option value="194">Seychelles</option>
                                    <option value="195">Sierra Leone</option>
                                    <option value="196">Singapore</option>
                                    <option value="197">Slovakia</option>
                                    <option value="198">Slovenia</option>
                                    <option value="199">Smaller Territories of the UK</option>
                                    <option value="200">Solomon Islands</option>
                                    <option value="201">Somalia</option>
                                    <option value="202">South Africa</option>
                                    <option value="203">South Georgia</option>
                                    <option value="204">South Sudan</option>
                                    <option value="205">Spain</option>
                                    <option value="206">Sri Lanka</option>
                                    <option value="207">Sudan</option>
                                    <option value="208">Suriname</option>
                                    <option value="209">Svalbard And Jan Mayen Islands</option>
                                    <option value="210">Swaziland</option>
                                    <option value="211">Sweden</option>
                                    <option value="212">Switzerland</option>
                                    <option value="213">Syria</option>
                                    <option value="214">Taiwan</option>
                                    <option value="215">Tajikistan</option>
                                    <option value="216">Tanzania</option>
                                    <option value="217">Thailand</option>
                                    <option value="218">Togo</option>
                                    <option value="219">Tokelau</option>
                                    <option value="220">Tonga</option>
                                    <option value="221">Trinidad And Tobago</option>
                                    <option value="222">Tunisia</option>
                                    <option value="223">Turkey</option>
                                    <option value="224">Turkmenistan</option>
                                    <option value="225">Turks And Caicos Islands</option>
                                    <option value="226">Tuvalu</option>
                                    <option value="227">Uganda</option>
                                    <option value="228">Ukraine</option>
                                    <option value="229">United Arab Emirates</option>
                                    <option value="230">United Kingdom</option>
                                    <option value="231">United States</option>
                                    <option value="232">United States Minor Outlying Islands</option>
                                    <option value="233">Uruguay</option>
                                    <option value="234">Uzbekistan</option>
                                    <option value="235">Vanuatu</option>
                                    <option value="236">Vatican City State (Holy See)</option>
                                    <option value="237">Venezuela</option>
                                    <option value="238">Vietnam</option>
                                    <option value="239">Virgin Islands (British)</option>
                                    <option value="240">Virgin Islands (US)</option>
                                    <option value="241">Wallis And Futuna Islands</option>
                                    <option value="242">Western Sahara</option>
                                    <option value="243">Yemen</option>
                                    <option value="244">Yugoslavia</option>
                                    <option value="245">Zambia</option>
                                    <option value="246">Zimbabwe</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="state">State:</label><span class="text-danger">*</span>
                                <select id="stateId" class="form-control" required name="state_id">
                                    <option value="">Select State</option>
                                    <option value="663">Alberta</option>
                                    <option value="664">British Columbia</option>
                                    <option value="665">Manitoba</option>
                                    <option value="666">New Brunswick</option>
                                    <option value="667">Newfoundland and Labrador</option>
                                    <option value="668">Northwest Territories</option>
                                    <option value="669">Nova Scotia</option>
                                    <option value="670">Nunavut</option>
                                    <option value="671" selected="selected">Ontario</option>
                                    <option value="672">Prince Edward Island</option>
                                    <option value="673">Quebec</option>
                                    <option value="674">Saskatchewan</option>
                                    <option value="675">Yukon</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="city">City:</label><span class="text-danger">*</span>
                                <select id="cityId" class="form-control" required name="city_id">
                                    <option value="">Select City</option>
                                    <option value="10252">Acton</option>
                                    <option value="10253">Ajax</option>
                                    <option value="10254">Alexandria</option>
                                    <option value="10255">Alfred</option>
                                    <option value="10256">Alliston</option>
                                    <option value="10257">Almonte</option>
                                    <option value="10258">Amherstburg</option>
                                    <option value="10259">Amigo Beach</option>
                                    <option value="10260">Angus-Borden</option>
                                    <option value="10261">Arnprior</option>
                                    <option value="10262">Arthur</option>
                                    <option value="10263">Athens</option>
                                    <option value="10264">Atikokan</option>
                                    <option value="10265">Attawapiskat</option>
                                    <option value="10266">Aurora</option>
                                    <option value="10267">Aylmer</option>
                                    <option value="10268">Ayr</option>
                                    <option value="10269">Barrie</option>
                                    <option value="10270">Barry&#039;&#039;s Bay</option>
                                    <option value="10271">Beamsville</option>
                                    <option value="10272">Beaverton</option>
                                    <option value="10273">Beeton</option>
                                    <option value="10274">Belleville</option>
                                    <option value="10275">Belmont</option>
                                    <option value="10276">Blenheim</option>
                                    <option value="10277">Blind River</option>
                                    <option value="10278">Bobcaygeon</option>
                                    <option value="10279">Bolton</option>
                                    <option value="10280">Bourget</option>
                                    <option value="10281">Bowmanville-Newcastle</option>
                                    <option value="10282">Bracebridge</option>
                                    <option value="10283">Bradford</option>
                                    <option value="10284">Brampton</option>
                                    <option value="10285">Brantford</option>
                                    <option value="10286">Bridgenorth-Chemong Park Area</option>
                                    <option value="10287">Brighton</option>
                                    <option value="10288">Brockville</option>
                                    <option value="10289">Brooklin</option>
                                    <option value="10290">Brussels</option>
                                    <option value="10291">Burford</option>
                                    <option value="10292">Burlington</option>
                                    <option value="10293">Caledon</option>
                                    <option value="10294">Caledon East</option>
                                    <option value="10295">Caledonia</option>
                                    <option value="10296">Cambridge</option>
                                    <option value="10297">Campbellford</option>
                                    <option value="10298">Campbellville</option>
                                    <option value="10299">Cannington</option>
                                    <option value="10300">Capreol</option>
                                    <option value="10301">Cardinal</option>
                                    <option value="10302">Carleton Place</option>
                                    <option value="10303" selected="selected">Carlisle</option>
                                    <option value="10304">Casselman</option>
                                    <option value="10305">Cayuga</option>
                                    <option value="10306">Chalk River</option>
                                    <option value="10307">Chapleau</option>
                                    <option value="10308">Chatham</option>
                                    <option value="10309">Chesley</option>
                                    <option value="10310">Chesterville</option>
                                    <option value="10311">Clinton</option>
                                    <option value="10312">Cobourg</option>
                                    <option value="10313">Cochrane</option>
                                    <option value="10314">Colborne</option>
                                    <option value="10315">Colchester</option>
                                    <option value="10316">Collingwood</option>
                                    <option value="10317">Concord</option>
                                    <option value="10318">Constance Bay</option>
                                    <option value="10319">Cookstown</option>
                                    <option value="10320">Cornwall</option>
                                    <option value="10321">Creemore</option>
                                    <option value="10322">Crystal Beach</option>
                                    <option value="10323">Deep River</option>
                                    <option value="10324">Delhi</option>
                                    <option value="10325">Deseronto</option>
                                    <option value="10326">Downsview</option>
                                    <option value="10327">Drayton</option>
                                    <option value="10328">Dresden</option>
                                    <option value="10329">Dryden</option>
                                    <option value="10330">Dundalk</option>
                                    <option value="10331">Dunnville</option>
                                    <option value="10332">Durham</option>
                                    <option value="10333">Dutton</option>
                                    <option value="10334">Eganville</option>
                                    <option value="10335">Elliot Lake</option>
                                    <option value="10336">Elmira</option>
                                    <option value="10337">Elmvale</option>
                                    <option value="10338">Embrun</option>
                                    <option value="10339">Englehart</option>
                                    <option value="10340">Erin</option>
                                    <option value="10341">Espanola</option>
                                    <option value="10342">Essex</option>
                                    <option value="10343">Etobicoke</option>
                                    <option value="10344">Everett</option>
                                    <option value="10345">Exeter</option>
                                    <option value="10346">Fenelon Falls</option>
                                    <option value="10347">Fergus</option>
                                    <option value="10348">Forest</option>
                                    <option value="10349">Fort Erie</option>
                                    <option value="10350">Fort Frances</option>
                                    <option value="10351">Frankford</option>
                                    <option value="10352">Gananoque</option>
                                    <option value="10353">Georgetown</option>
                                    <option value="10354">Georgina</option>
                                    <option value="10355">Geraldton</option>
                                    <option value="10356">Glencoe</option>
                                    <option value="10357">Goderich</option>
                                    <option value="10358">Golden</option>
                                    <option value="10359">Gormley</option>
                                    <option value="10360">Grand Bend</option>
                                    <option value="10361">Grand Valley</option>
                                    <option value="10362">Gravenhurst</option>
                                    <option value="10363">Guelph</option>
                                    <option value="10364">Hagersville</option>
                                    <option value="10365">Haileybury</option>
                                    <option value="10366">Hamilton</option>
                                    <option value="10367">Hanover</option>
                                    <option value="10368">Harriston</option>
                                    <option value="10369">Harrow</option>
                                    <option value="10370">Hastings</option>
                                    <option value="10371">Havelock</option>
                                    <option value="10372">Hawkesbury</option>
                                    <option value="10373">Hearst</option>
                                    <option value="10374">Hensall</option>
                                    <option value="10375">Hillsburgh</option>
                                    <option value="10376">Hornepayne</option>
                                    <option value="10377">Huntsville</option>
                                    <option value="10378">Ingersoll</option>
                                    <option value="10379">Innisfil</option>
                                    <option value="10380">Iroquois</option>
                                    <option value="10381">Iroquois Falls</option>
                                    <option value="10382">Jarvis</option>
                                    <option value="10383">Kanata</option>
                                    <option value="10384">Kapuskasing</option>
                                    <option value="10385">Kars</option>
                                    <option value="10386">Kemptville</option>
                                    <option value="10387">Kenora</option>
                                    <option value="10388">Kincardine</option>
                                    <option value="10389">Kingston</option>
                                    <option value="10390">Kirkland Lake</option>
                                    <option value="10391">Kitchener</option>
                                    <option value="10392">L&#039;&#039;Original</option>
                                    <option value="10393">Lakefield</option>
                                    <option value="10394">Lanark</option>
                                    <option value="10395">Leamington</option>
                                    <option value="10396">Lindsay</option>
                                    <option value="10397">Listowel</option>
                                    <option value="10398">Little Current</option>
                                    <option value="10399">Lively</option>
                                    <option value="10400">London</option>
                                    <option value="10401">Longlac</option>
                                    <option value="10402">Lucan</option>
                                    <option value="10403">Lucknow</option>
                                    <option value="10404">Madoc</option>
                                    <option value="10405">Manitouwadge</option>
                                    <option value="10406">Maple</option>
                                    <option value="10407">Marathon</option>
                                    <option value="10408">Markdale</option>
                                    <option value="10409">Markham</option>
                                    <option value="10410">Marmora</option>
                                    <option value="10411">Mattawa</option>
                                    <option value="10412">Meaford</option>
                                    <option value="10413">Metcalfe</option>
                                    <option value="10414">Midland</option>
                                    <option value="10415">Mildmay</option>
                                    <option value="10416">Millbrook</option>
                                    <option value="10417">Milton</option>
                                    <option value="10418">Milverton</option>
                                    <option value="10419">Mississauga</option>
                                    <option value="10420">Mississauga Beach</option>
                                    <option value="10421">Mitchell</option>
                                    <option value="10422">Moose Factory</option>
                                    <option value="10423">Morrisburg</option>
                                    <option value="10424">Mount Albert</option>
                                    <option value="10425">Mount Brydges</option>
                                    <option value="10426">Mount Forest</option>
                                    <option value="10427">Munster</option>
                                    <option value="10428">Nanticoke</option>
                                    <option value="10429">Napanee</option>
                                    <option value="10430">Nepean</option>
                                    <option value="10431">New Hamburg</option>
                                    <option value="10432">Newmarket</option>
                                    <option value="10433">Newtonville</option>
                                    <option value="10434">Nobleton</option>
                                    <option value="10435">North Bay</option>
                                    <option value="10436">North Gower</option>
                                    <option value="10437">North York</option>
                                    <option value="10438">Norwich</option>
                                    <option value="10439">Norwood</option>
                                    <option value="10440">Oakville</option>
                                    <option value="10441">Omemee</option>
                                    <option value="10442">Onaping-Levack</option>
                                    <option value="10443">Ontario</option>
                                    <option value="10444">Orangeville</option>
                                    <option value="10445">Orillia</option>
                                    <option value="10446">Orono</option>
                                    <option value="10447">Osgoode</option>
                                    <option value="10448">Oshawa</option>
                                    <option value="10449">Ottawa</option>
                                    <option value="10450">Owen Sound</option>
                                    <option value="10451">Paisley</option>
                                    <option value="10452">Palmerston</option>
                                    <option value="10453">Paris</option>
                                    <option value="10454">Parkhill</option>
                                    <option value="10455">Parry Sound</option>
                                    <option value="10456">Pembroke</option>
                                    <option value="10457">Perth</option>
                                    <option value="10458">Petawawa</option>
                                    <option value="10459">Peterborough</option>
                                    <option value="10460">Petrolia</option>
                                    <option value="10461">Pickering</option>
                                    <option value="10462">Picton</option>
                                    <option value="10463">Porcupine</option>
                                    <option value="10464">Port Credit</option>
                                    <option value="10465">Port Dover</option>
                                    <option value="10466">Port Elgin</option>
                                    <option value="10467">Port Hope</option>
                                    <option value="10468">Port Perry</option>
                                    <option value="10469">Port Stanley</option>
                                    <option value="10470">Powassan</option>
                                    <option value="10471">Prescott</option>
                                    <option value="10472">Queensville</option>
                                    <option value="10473">Renfrew</option>
                                    <option value="10474">Richmond</option>
                                    <option value="10475">Richmond Hill</option>
                                    <option value="10476">Ridgetown</option>
                                    <option value="10477">Rockland</option>
                                    <option value="10478">Rockwood</option>
                                    <option value="10479">Rodney</option>
                                    <option value="10480">Saint Catharines</option>
                                    <option value="10481">Saint Catharines-Niagara</option>
                                    <option value="10482">Saint George</option>
                                    <option value="10483">Saint Jacobs</option>
                                    <option value="10484">Saint Marys</option>
                                    <option value="10485">Saint Thomas</option>
                                    <option value="10486">Sarnia</option>
                                    <option value="10487">Sault Sainte Marie</option>
                                    <option value="10488">Scarborough</option>
                                    <option value="10489">Schomberg</option>
                                    <option value="10490">Seaforth</option>
                                    <option value="10491">Shelburne</option>
                                    <option value="10492">Simcoe</option>
                                    <option value="10493">Sioux Lookout</option>
                                    <option value="10494">Smiths Falls</option>
                                    <option value="10495">Smithville</option>
                                    <option value="10496">South River</option>
                                    <option value="10497">Southampton</option>
                                    <option value="10498">Stayner</option>
                                    <option value="10499">Stirling</option>
                                    <option value="10500">Stoney Creek</option>
                                    <option value="10501">Stoney Point</option>
                                    <option value="10502">Stouffville</option>
                                    <option value="10503">Stratford</option>
                                    <option value="10504">Strathroy</option>
                                    <option value="10505">Sturgeon Falls</option>
                                    <option value="10506">Sudbury</option>
                                    <option value="10507">Sutton</option>
                                    <option value="10508">Tavistock</option>
                                    <option value="10509">Teeswater</option>
                                    <option value="10510">Terrace Bay</option>
                                    <option value="10511">Thamesford</option>
                                    <option value="10512">Thessalon</option>
                                    <option value="10513">Thornbury</option>
                                    <option value="10514">Thornhill</option>
                                    <option value="10515">Thunder Bay</option>
                                    <option value="10516">Tilbury</option>
                                    <option value="10517">Tilsonburg</option>
                                    <option value="10518">Timmins</option>
                                    <option value="10519">Toronto</option>
                                    <option value="10520">Tory Hill</option>
                                    <option value="10521">Tottenham</option>
                                    <option value="10522">Tweed</option>
                                    <option value="10523">Uxbridge</option>
                                    <option value="10524">Valley East</option>
                                    <option value="10525">Vankleek Hill</option>
                                    <option value="10526">Vaughan</option>
                                    <option value="10527">Vineland</option>
                                    <option value="10528">Walkerton</option>
                                    <option value="10529">Wallaceburg</option>
                                    <option value="10530">Wasaga Beach</option>
                                    <option value="10531">Waterdown</option>
                                    <option value="10532">Waterford</option>
                                    <option value="10533">Waterloo</option>
                                    <option value="10534">Watford</option>
                                    <option value="10535">Wawa</option>
                                    <option value="10536">Welland</option>
                                    <option value="10537">Wellesley</option>
                                    <option value="10538">Wellington</option>
                                    <option value="10539">West Lorne</option>
                                    <option value="10540">Wheatley</option>
                                    <option value="10541">Whitby</option>
                                    <option value="10542">Whitchurch-Stouffville</option>
                                    <option value="10543">Wiarton</option>
                                    <option value="10544">Wikwemikong</option>
                                    <option value="10545">Willowdale</option>
                                    <option value="10546">Winchester</option>
                                    <option value="10547">Windsor</option>
                                    <option value="10548">Wingham</option>
                                    <option value="10549">Woodbridge</option>
                                    <option value="10550">Woodstock</option>
                                    <option value="10551">Wyoming</option>
                                </select>
                            </div>
                            <div class="form-group custom-control-alternative custom-checkbox ml-4 p-3">
                                <input type="checkbox" id="remember" name="available_as_freelancer" value="1"
                                    class="custom-control-input" checked>
                                <label class="custom-control-label" for="remember">
                                    <h4 class="font-weight-normal">Available As Freelancer</h4>
                                </label>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="job_description">Job Description:</label><span
                                        class="text-danger">*</span>
                                    <textarea class="form-control" cols="3" id="userJobDescription" required placeholder="Job Description"
                                        name="job_description" rows="10">UX-UI Designers are generally responsible for collecting, researching,investigating and evaluating user requirements. Their responsibility is to deliver an outstanding user experience providing an exceptional and intuitive application design.</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="about_me">About Me:</label><span class="text-danger">*</span>
                                    <textarea class="form-control" cols="3" id="userAboutMe" required placeholder="Add About me..."
                                        name="about_me" rows="10">Alice Dion is a director of brand marketing, with experience managing global teams and multi-million-dollar campaigns. Her background in brand strategy, visual design, and account management inform her mindful but competitive approach. Madison is fueled by her passion for understanding the nuances of cross-cultural advertising. </textarea>
                                </div>
                            </div>

                            <div class="form-group col-sm-12 d-flex">
                                <input type="submit" class="btn btn-primary" id="btnSave"
                                    data-loading-text="&lt;span class=&#039;spinner-border spinner-border-sm&#039;&gt;&lt;/span&gt; Processing..."
                                    value="Save">
                                <a href="https://infyportfolio.infyom.com/users/1/edit"
                                    class="btn btn-light text-dark">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
