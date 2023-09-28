alert("Mad Libs Story (Past Tense): Daniel was getting ready for the formal dinner when [noun 1 (name or occupation)] called him and said that [noun 2 (event)] had occurred. \“What?!?\”, he screamed in [adverb 1 (emotion, ends in 'ly')]. Daniel [verb 1] to [noun 3 (place where the event happened)] and [verb 2] [adverb 2, ends in 'ly']. Finally, he went home knowing that everything was [adjective].");


let noun1 = prompt("Fill In: [noun 1 (name or occupation)]");
let noun2 = prompt("Fill In: [noun 2 (event)]");
let adverb1 = prompt("Fill In: [adverb 1 (emotion that ends in 'ly')]");
let noun3 = prompt("Fill In: [noun 3 (place where the event happened)]");
let verb1 = prompt("Fill In: [verb 1 (action)]");
let verb2 = prompt("Fill In: [verb 2 (action)]");
let adverb2 = prompt("Fill In: [adverb 2 (emotion, ends in 'ly')]");
let adjective = prompt("Fill In: [adjective (state of condition)]");


alert("Daniel was getting ready for the formal dinner when " + noun1 + " called him and said that " + noun2 + " had occurred. \“What?!?\”, he screamed " + adverb1 + ". Daniel " + verb1 + " to " + noun3 + " and " + verb2 + " " + adverb2 + ". Finally, he went home knowing that everything was " + adjective + ".");
