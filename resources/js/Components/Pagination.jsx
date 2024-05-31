import { Link } from "@inertiajs/react";

export default function Pagination({links}){
    return(
        <nav className="text-center mt-4">
            {links.map(link=>(
                <Link href={link.url}>
                {link.label}
                </Link>
            ))}
        </nav>
    )
}