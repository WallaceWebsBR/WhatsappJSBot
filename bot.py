#!/usr/bin/python
# -*- encoding:utf-8 -*-
import cgi
import json
from datetime import date

dias = [
    'Segunda-feira',
    'Terça-feira',
    'Quarta-feira',
    'Quinta-feira',
    'Sexta-feira',
    'Sábado',
    'Domingo'
]
 
def quebra_data(data):
    if (data.count('/') == 2 and
            all((x.isdigit() for x in data.split('/')))):
        return [int(x) for x in data.split('/')]
    else:
        raise ValueError
 
def dia_da_semana(data):
    try:
        dia, mes, ano = quebra_data(data)
        return dias[date(ano, mes, dia).weekday()]
    except ValueError:
        return ''
 
print "Content-Type: text/json\n\n"
fields = cgi.FieldStorage()
data = fields.getvalue('data')
dia_str = dia_da_semana(data) if data is not None else ''
print json.dumps({'data': data, 'saida': dia_str})
