SELECT
    s.id AS schedule_id,
    u.profile_image,
    DATE_FORMAT(s.date, '%M %d, %Y') AS date,
    DATE_FORMAT(s.date, '%Y') AS year,
    DATE_FORMAT(s.date, '%M') AS month,
    DATE_FORMAT(s.time_from, '%l:%i %p') AS time_from,
    DATE_FORMAT(s.time_to, '%l:%i %p') AS time_to,
    s.date AS s_date,
    u.role,
    s.venue,
    s.address,
    s.purpose,
    s.others,
    s.sched_type,
    s.created_by,
    s.created_by_name,
    s.assign_to,
    s.assign_to_name,
    s.assign_by,
    s.status,
    s.is_assign,
    s.created_at AS schedule_created_at,
    s.updated_at AS schedule_updated_at,
    e.id AS event_id,
    e.title AS event_title,
    e.start AS event_start,
    e.end AS event_end,
    e.color AS event_color,
    e.created_at AS event_created_at,
    e.updated_at AS event_updated_at
FROM
    schedules s
LEFT JOIN
    events e
ON
    s.id = e.schedule_id
LEFT JOIN
    liturgicals l
ON
    l.id = e.liturgical_id
JOIN
    users u
ON
    u.id = s.created_by;