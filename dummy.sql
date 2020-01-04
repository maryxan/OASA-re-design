select r.id, r.duration, r.price, s.*
from(
    select * 
    from routes
    where starting_point = '10η Καισαριανής' 
    and destination = 'Λιμάνι Πειραιά'
    ) as r, steps as s
where r.id = s.route_id
order by r.duration asc, s.step_number asc 



