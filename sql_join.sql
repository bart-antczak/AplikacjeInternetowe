/* Drivers */
SELECT
  drivers.id,
  drivers.name,
  drivers.surname,
  drivers.image,
  teams.name,
  COUNT(drivers_answers.driver_id) AS drivers_answers
FROM
  drivers
LEFT JOIN drivers_answers ON drivers.id = drivers_answers.driver_id
LEFT JOIN teams ON drivers.team = teams.id
GROUP BY drivers.id
ORDER BY drivers_answers DESC;

/* Teams */
SELECT
  teams.id,
  teams.name,
  COUNT(teams_answers.team_id) AS teams_answers
FROM
  teams
LEFT JOIN teams_answers ON teams.id = teams_answers.team_id
GROUP BY teams.id
ORDER BY teams_answers DESC;