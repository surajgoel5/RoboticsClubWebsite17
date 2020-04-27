# -*- coding: cp1252 -*-
from xlrd import open_workbook

wb = open_workbook('team.xls')
values = []
for s in wb.sheets():
    #print 'Sheet:',s.name
    for row in range(1, s.nrows):
        col_names = s.row(0)
        col_value = []
        for name, col in zip(col_names, range(s.ncols)):
            value  = (s.cell(row,col).value)
            try : value = str(int(value))
            except : pass
            col_value.append((name.value, value))
        values.append(col_value)
i=0
f=open("../mechteam.php",'w')
for v in values:
    i+=1
    name=v[0][1]
    
    email=v[2][1]
    fb=v[3][1]
    phone=v[4][1]
    
    pic="img/Team/team/"+v[5][1]
    dept=v[6][1]

    person=(    '<div class="col-lg-15 col-md-3 col-sm-4 wow fadeInUp">'
                '				 <div class="member">'
		'				<a href="#text'+str(i)+'" data-toggle="collapse"><img  src="'+pic+'"  class="img-responsive center-block img-circle center person" alt="'+name+'">'
		'					<p class="text-center"><strong class="text-center">'+name+'</strong></p></a>'
		'					 <div id="text'+str(i)+'" class="collapse">'
		'					 <p class="text-muted ">'+dept+' Department</p>'
		'					 <p class="collapse" id="phone'+str(i)+'">+91-'+phone+'</p>'
		'					  <p class="collapse" id="email'+str(i)+'">'+email+'</p>'
                '       <ul class="social-buttons list-inline">	'
                '          <li class="email"><a href="#email'+str(i)+'" data-toggle="collapse"><i class="fa fa-envelope"></i></a>'
                '         </li>'
		'					<li class="phone"><a href="#phone'+str(i)+'" data-toggle="collapse"><i class="fa fa-phone "></i></a>'
                '           </li>'
                '           <li class="fb"><a href="'+fb+'" target="_blank"><i class="fa fa-facebook"></i></a>'
                '          </li>    '
                '      </ul>'
		'				</div>			'						
		'			  </div>'
		'		</div>')
            
    clrfix=''
    if i%5==0:
        clrfix+='<div class="clearfix visible-lg-block"></div>'
    if i%4==0:
        clrfix+='<div class="clearfix visible-md-block"></div>'
    if i%3==0:
        clrfix+='<div class="clearfix visible-sm-block"></div>'
    f.write( person+clrfix)

f.close()
    
