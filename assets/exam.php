<section class="exam">
        <h1>Examination</h1>
        <span class="exam_location">
                <p>Home</p>
                <i class="fas fa-chevron-right"></i>
                <p class="all_exam_para">Library</p> 
        </span>
        <!-- exam add section start============================================== -->
        <div class="add_new_exam">
                <h1>Add New Exam</h1>
          <form id="exam_schedule_form" method="POST">
             <div class="row1">
                <div class="row1_inner1">
                   <label for="e_name">Name Professor</label><br>
                   <input type="text" id="e_name" name="e_name"><br>
                </div>
                <div class="row1_inner2">
                        <label for="s_type">Subject Type*</label><br>
                        <select name="s_type" id="s_type">
                                <option value="" disabled selected hidden>Please Select</option>
                                <option value="computer science">Computer Science</option>
                                <option value="web engineering">Web Engineering</option>
                                <option value="software engineer">Software Engineering</option>
                                <option value="lab course 1">Lab Course 1</option>
                                <option value="it">IT</option>
                                <option value="introduction to information security">Introduction to Information Security</option>
                                <option value="systems and signals">Systems and Signals</option>
                                <option value="discrete structure 2">Discrete Structure 2</option>
                                <option value="algorithms and data structure">Algorithms and data structure</option>
                                <option value="mathematics 1">Mathematics 1</option>
                                <option value="mathematics 1">Mathematics 2</option>
                                
                        </select>
                </div>
                </div>
                <div class="row2">
                    <div class="row2_inner1">
                       <label for="s_class">Select Class</label><br>
                       <select name="s_classes" id="s_classes">
                                <option value="" disabled selected hidden>Please Select</option>
                                <option value="play">D136</option>
                                <option value="nursery">D108</option>
                                <option value="one">D112</option>
                                <option value="two">D106</option>
                                <option value="three">D134</option>
                        </select>
                    </div>
                     <div class="row2_inner2">
                        <label for="s_section">Select Location*</label><br>
                        <select name="s_section" id="s_section">
                                <option value="" disabled selected hidden>Please Select</option>
                                <option value="PD">Pristina - Dukagjini</option>
                                <option value="PK">Pristina - Kalabri</option>
                                <option value="UCL">UBT Campus - Lipjan</option>
                                <option value="Z1O">Z11101 - online</option>
                                <option value="Z0O">Z1100 - online</option>
                        </select>
                     </div>
             </div>
             <div class="row3">
             <div class="row3_inner1">
                       <label for="s_time">Select Time</label><br>
                       <input type="text" id="s_time" name="s_time">
                </div>
                <div class="row3_inner2">
                        <label for="s_date">Select Date</label><br>
                        <input type="date" id="s_date" name="s_date">
                </div>
             </div>
             <button class="e_save_btn" id="e_save_btn">Save</button>
           </form>
        </div>
        <!-- exam add section end============================================== -->

        <!-- exam table schedule start============================================== -->
        <div class="all_exam_schedule">
                <div class="header_exam_schedule_table">
                       <h1>All Exam Schedule</h1>  
                        <button id="delete_all_exam_schedule">Delete All</button>
                </div>
           <div id="showExamData">

           </div>
        </div>
        <!-- exam table schedule end============================================== -->
        <h1 style="font-size: 25px;">UBT School System</h1>
</section>