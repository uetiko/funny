(1..50).each do |num|
	case true
	when 0 == (num % 5) && 0 == (num % 3)
		puts 'fizzbuzz'
	when 0 == (num % 3)
		puts 'fizz'
	when 0 == (num % 5)
		puts 'buzz'
	else
		puts num
	end
end
