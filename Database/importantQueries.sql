--Returns all mixed drinks and their respective ingredients
SELECT mixeddrinks.MixedDrink_Name, liquors.Liquor_Name, mixers.Mixer_Name, garnishes.Garnish_Name
FROM mixeddrinks
    JOIN liquors
        ON liquors.Liquor_ID = mixeddrinks.Liquor_ID
    JOIN mixers
        ON mixers.Mixer_ID = mixeddrinks.Mixer_ID
    JOIN garnishes
        ON garnishes.Garnish_ID = mixeddrinks.Garnish_ID;
		
--Returns all mixed drinks and their respective images
SELECT mixeddrinks.MixedDrink_Name, mixeddrinkimages.MixedDrink_Image
FROM mixeddrinks
	INNER JOIN mixeddrinkimages
		ON mixeddrinks.MixedDrink_ID=mixeddrinkimages.MixedDrink_ID;		