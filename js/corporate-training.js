$(document).ready(function(){"use strict";var e=$("#business_demo_form");e.parsley(parsleyConfig),e.on("submit",function(a){a.preventDefault();var n={name:e.find("#full_name").val().trim(),email:{email:e.find("#email").val().trim(),category:"work"},customer_source_id:305411};$.ajax({type:"POST",url:"www-proxy/leads",data:JSON.stringify(n),contentType:"application/json; charset=utf-8",dataType:"json",success:function(){$("#banner--success.demo").toggle().slideDown(),setTimeout(function(){window.open("https://classroom.udacity.com/courses/ud976.1/lessons/75e786c3-5b6e-4a7d-b314-f2f4165aa21e/concepts/2cbb26de-5af7-498d-868b-232c8c2834b5","_self")},3e3),analytics.track("BD Interested",{category:"BD Demo Interested",label:"BD Demo Interested - Corporate Training - Contact Us",full_name:n.name,email:n.email.email,cta_location:"Corporate Training",nd_key:"nd008"})},error:function(){$("#banner--error.demo").toggle().slideDown()}})})});