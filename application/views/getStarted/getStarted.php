@include('header')
<body>
<nav class="navbar navbar-default navbar-fixed-top top-nav">
  <div class="container-fluid">
  <div class="row">
        <a class="navbar-brand" href="#">
        <img alt="Brand" src="{{Url::assets('img/favicon.ico')}}">
        </a>
      <a class="navbar-brand" href="#">Gliver MVC</a>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-right" id="collapse1">

      <ul class="nav navbar-nav top-nav">
        <li class="active"><a href="#">Documentation <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Download</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Community</a></li>
        <li><a href="#">Contribute</a></li>
        </div>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

</div>
<div class="container">
    <div class="row">
        <div class="col-sm-3 mycontent-left side-bar sidebar">
        <div class="row">
            <h4 class="lead">Content List</h4>
        </div>
        <div class="row rpad">
            <form  role="search">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
              </div>
              <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
           <div class="lpad"> 
            <div class="row">
                <ul>
                    <li id="introduction" class="lead tpad dotted-underline">Preface</li>
                </ul>
            </div>
            <ul>
                <div class="row">
                   <li><a href="{{Url::base('preface#introduction')}}">Introduction</a></li>
                </div>
                <div class="row">   
                    <li><a href="{{Url::base('preface#quick_start')}}">Quick Start</a></li>
                </div>    
                <div class="row">
                      <li><a href="{{Url::base('preface#release_notes')}}">Release Notes</a></li>
                </div>      
                <div class="row">
                       <li><a href="{{Url::base('preface#upgrade_guide')}}">Upgrade Guide</a></li>
                </div>       
                <div class="row">
                        <li><a href="{{Url::base('preface#contribution_guide')}}">Contribution Guide</a></li>
                </div>        
            </ul>
             <div class="row">
                <ul>
                    <li id="via_composer" class="lead tpad dotted-underline">Installation</li>
                </ul>
            </div>
            <ul>
                <div class="row">
                   <li><a href="{{Url::base('installation#via_composer')}}">Via Composer</a></li>
                </div>
                <div class="row">   
                    <li><a href="{{Url::base('installation#downloading')}}">Downloading</a></li>
                </div>    
                <div class="row">
                      <li><a href="{{Url::base('installation#upgrade')}}">Upgrade from previous versions</a></li>
                </div>      
                <div class="row">
                       <li><a href="{{Url::base('installation#troubleshooting')}}">Troubleshooting</a></li>
                </div>              
            </ul>
            <div class="row">
                <ul>
                    <li id="controllers" class="lead tpad dotted-underline">Brief Tour</li>
                </ul>
            </div>
            <ul>
                <div class="row">
                   <li><a href="{{Url::base('brief#controllers')}}">Controllers</a></li>
                </div>
                <div class="row">   
                    <li><a href="{{Url::base('brief#views')}}">Views</a></li>
                </div>    
                <div class="row">
                      <li><a href="{{Url::base('brief#models')}}">Models</a></li>
                </div>                   
            </ul>
            <div class="row">
                <ul>
                    <li id="glance" class="lead tpad dotted-underline">Getting Started</li>
                </ul>
            </div>
            <ul>
                <div class="row">
                   <li><a href="#glance">Gliver at a glance</a></li>
                </div>
                <div class="row">   
                    <li><a href="#supported_features">Supported Features</a></li>
                </div>    
                <div class="row">
                      <li><a href="#flowchart">Application Flow Chart</a></li>
                </div>      
                <div class="row">
                       <li><a href="#configuration">Configuration</a></li>
                </div>       
                <div class="row">
                        <li><a href="#routing">Routing</a></li>
                </div> 
                <div class="row">
                        <li><a href="#input">Request/Input</a></li>
                </div> 
                <div class="row">
                        <li><a href="#views">Views/Responses</a></li>
                </div>  
                <div class="row">
                        <li><a href="#errors">Errors/Logging</a></li>
                </div>       
            </ul>
            <div class="row">
                <ul>
                    <li id="array" class="lead tpad dotted-underline">Helpers</li>
                </ul>
            </div>
            <ul>
                <div class="row">
                   <li><a href="{{Url::base('helpers#array')}}">Array</a></li>
                </div>
                <div class="row">   
                    <li><a href="{{Url::base('helpers#calendar')}}">Calendar</a></li>
                </div>    
                <div class="row">
                      <li><a href="{{Url::base('helpers#captcha')}}">CAPTCHA</a></li>
                </div>      
                <div class="row">
                       <li><a href="{{Url::base('helpers#cart')}}">Cart</a></li>
                </div>  
                <div class="row">
                        <li><a href="{{Url::base('helpers#config')}}">Config</a></li>
                </div>      
                <div class="row">
                        <li><a href="{{Url::base('helpers#date')}}">Date</a></li>
                </div> 
                <div class="row">
                        <li><a href="{{Url::base('helpers#directory')}}">Directory</a></li>
                </div> 
                <div class="row">
                        <li><a href="{{Url::base('helpers#download')}}">Download</a></li>
                </div>  
                <div class="row">
                        <li><a href="{{Url::base('helpers#email')}}">Email</a></li>
                </div> 
                <div class="row">
                        <li><a href="{{Url::base('helpers#encryption')}}">Encryption</a></li>
                </div> 
                <div class="row">
                        <li><a href="{{Url::base('helpers#file')}}">File</a></li>
                </div> 
                <div class="row">
                        <li><a href="{{Url::base('helpers#form')}}">Form</a></li>
                </div> 
                <div class="row">
                        <li><a href="{{Url::base('helpers#html')}}">HTML</a></li>
                </div> 
                <div class="row">
                        <li><a href="{{Url::base('helpers#inflector')}}">Inflector</a></li>
                </div> 
                <div class="row">
                        <li><a href="{{Url::base('helpers#input')}}">Input</a></li>
                </div> 
                <div class="row">
                        <li><a href="{{Url::base('helpers#language')}}">Language</a></li>
                </div> 
                <div class="row">
                        <li><a href="{{Url::base('helpers#migration')}}">Migration</a></li>
                </div> 
                <div class="row">
                        <li><a href="{{Url::base('helpers#number')}}">Number</a></li>
                </div> 
                <div class="row">
                        <li><a href="{{Url::base('helpers#pagination')}}">Pagination</a></li>
                </div> 
                <div class="row">
                        <li><a href="{{Url::base('helpers#sath')}}">Path</a></li>
                </div> 
                <div class="row">
                        <li><a href="{{Url::base('helpers#security')}}">Security</a></li>
                </div> 
                <div class="row">
                        <li><a href="{{Url::base('helpers#session')}}">Session</a></li>
                </div> 
                <div class="row">
                        <li><a href="{{Url::base('helpers#smiley')}}">Smiley</a></li>
                </div> 
                <div class="row">
                        <li><a href="{{Url::base('helpers#string')}}">String</a></li>
                </div> 
                <div class="row">
                        <li><a href="{{Url::base('helpers#template_parser')}}">Template Parser</a></li>
                </div> 
                <div class="row">
                        <li><a href="{{Url::base('helpers#text')}}">Text</a></li>
                </div> 
                <div class="row">
                        <li><a href="{{Url::base('helpers#Typography')}}">Typography</a></li>
                </div>  
                <div class="row">
                        <li><a href="{{Url::base('helpers#unit_testing')}}">Unit testing</a></li>
                </div> 
                <div class="row">
                        <li><a href="{{Url::base('helpers#validation')}}">Validation</a></li>
                </div> 
                <div class="row">
                        <li><a href="{{Url::base('helpers#xml')}}">XML</a></li>
                </div> 
                <div class="row">
                        <li><a href="{{Url::base('helpers#zip_encoding')}}">ZIP Encoding</a></li>
                </div> 
                <div class="row">
                <ul>
                    <li id="basic_usage" class="lead tpad dotted-underline">Database</li>
                </ul>
                </div>
                <ul>
                <div class="row">
                   <li><a href="{{Url::base('database#basic_usage')}}">Basic Usage</a></li>
                </div>
                <div class="row">   
                    <li><a href="{{Url::base('database#query_builder')}}">Query Builder</a></li>
                </div>    
                <div class="row">
                      <li><a href="{{Url::base('database#eloquent')}}">Eloquent ORM</a></li>
                </div>      
                <div class="row">
                       <li><a href="{{Url::base('database#schema_builder')}}">Schema Builder</a></li>
                </div>       
                <div class="row">
                        <li><a href="{{Url::base('database#migration_seeding')}}">Migration/Seeding</a></li>
                </div> 
                <div class="row">
                        <li><a href="{{Url::base('database#sql')}}">SQL</a></li>
                </div> 
                <div class="row">
                        <li><a href="{{Url::base('database#nosql')}}">NoSQL-MongoDB</a></li>
                </div>  
                <div class="row">
                        <li><a href="{{Url::base('database#postgre')}}">PostgreSQl</a></li>
                </div>       
            </ul>
            <div class="row">
                <ul>
                    <li id="memcache" class="lead tpad dotted-underline">Caching</li>
                </ul>
            </div>
            <ul>
                <div class="row">
                   <li><a href="{{Url::base('caching#memcache')}}">Memcache</a></li>
                </div>
                <div class="row">   
                    <li><a href="{{Url::base('caching#memcached')}}">Memcached</a></li>
                </div>    
                <div class="row">
                      <li><a href="{{Url::base('caching#redis')}}">Redis</a></li>
                </div>                   
            </ul>
          </div>  
      </div> 
        <div class="col-lg-9 lmargin">
           <h4 id="glance">Gliver at a glance</h4>
            <p>
                <br/>  <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>          
            </p>
                       
            <h4 id="supported_features">Supported Features</h4>
                <p>
                <br/>  <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>          
                </p>
            <h4 id="flowchart">Application Flowchart</h4>
                <p>
                <br/>  <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>          
                </p>    
            <h4 id="configuration">Configuration</h4>
                <p>
                <br/>  <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>          
                </p>
            <h4 id="routing">Routing</h4>
                <p>
                <br/>  <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>          
                </p>    
            <h4 id="input">Response/Input</h4>
            <p>
                <br/>  <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>          
            </p>
                       
            <h4 id="views">Views/Responses</h4>
                <p>
                <br/>  <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>          
                </p>
            <h4 id="errors">Errors/Logging</h4>
                <p>
                <br/>  <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>          
                </p>        
        </div>
    </div>
</div>
@include('footer')