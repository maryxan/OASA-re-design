select 
r.id as route_id, 
s.step_number, 
s.start, 
s.end, 
s.duration,
s.medium_type, 
s.medium_name, 
s.in_between_stops,
r.duration as total_duration, 
r.price as total_price
		from(
			select * 
			from routes
			where starting_point = '10η Καισαριανής' 
			and destination = 'Λιμάνι Πειραιά'
			) as r, steps as s
		where r.id = s.route_id
		order by total_duration asc, s.step_number asc



