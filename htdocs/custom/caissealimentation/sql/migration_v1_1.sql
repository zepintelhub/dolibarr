ALTER TABLE llx_paiementoperation
ADD COLUMN sommeversee INTEGER;

ALTER TABLE llx_paiementoperation
ADD COLUMN monnaie INTEGER;

ALTER TABLE llx_paiementoperation
ADD COLUMN remise INTEGER;

ALTER TABLE llx_paiementoperation
ADD COLUMN mode_paiement VARCHAR(90);