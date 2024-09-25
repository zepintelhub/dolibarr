-- Copyright (C) 2024 SuperAdmin
--
-- This program is free software: you can redistribute it and/or modify
-- it under the terms of the GNU General Public License as published by
-- the Free Software Foundation, either version 3 of the License, or
-- (at your option) any later version.
--
-- This program is distributed in the hope that it will be useful,
-- but WITHOUT ANY WARRANTY; without even the implied warranty of
-- MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
-- GNU General Public License for more details.
--
-- You should have received a copy of the GNU General Public License
-- along with this program.  If not, see https://www.gnu.org/licenses/.


-- BEGIN MODULEBUILDER INDEXES
ALTER TABLE llx_gestionnaire_cotisation ADD INDEX idx_gestionnaire_cotisation_rowid (rowid);
ALTER TABLE llx_gestionnaire_cotisation ADD INDEX idx_gestionnaire_cotisation_status (status);
-- END MODULEBUILDER INDEXES

--ALTER TABLE llx_gestionnaire_cotisation ADD UNIQUE INDEX uk_gestionnaire_cotisation_fieldxy(fieldx, fieldy);

--ALTER TABLE llx_gestionnaire_cotisation ADD CONSTRAINT llx_gestionnaire_cotisation_fk_field FOREIGN KEY (fk_field) REFERENCES llx_gestionnaire_myotherobject(rowid);

